<?php

namespace App\Http\Controllers;

use App\Helper\CategoryRecursive;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    private function getCategory($parentId)
    {
        $data = $this->category->all();
        $recursive = new CategoryRecursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }

    public function index()
    {
        $categories = Category::getAllCategory();
        foreach ($categories as $category) {
            $category['parentName'] = Category::getParent($category['parent_id']);
        }
        return view('backend.category.index')->with('categories', $categories);
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('backend.category.create', compact('htmlOption'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|nullable',
            'photo' => 'string|nullable',
            'status' => 'required|in:active,inactive',
            'parent_id' => 'nullable',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Category::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        Category::create($data);
        return redirect()->route('category.index');

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('backend.category.edit')->with('category', $category)->with('htmlOption', $htmlOption);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|nullable',
            'photo' => 'string|nullable',
            'status' => 'required|in:active,inactive',
            'parent_id' => 'nullable',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $category->fill($data)->save();
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'Delete success',
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Lỗi : ' . $exception->getMessage() . '--- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'Delete fail',
            ], 500);
        }
    }

    public function getChildByParent(Request $request)
    {
        Category::findOrFail($request->id);
        $child_cat = Category::getChildByParentId($request->id);
        if (count($child_cat) <= 0) {
            return response()->json(['status' => false, 'msg' => '', 'data' => null]);
        } else {
            return response()->json(['status' => true, 'msg' => '', 'data' => $child_cat]);
        }
    }
}
