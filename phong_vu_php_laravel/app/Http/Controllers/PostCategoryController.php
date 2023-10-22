<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    public function index()
    {
        $postCategories = PostCategory::orderBy('id', 'DESC')->paginate(10);
        return view('backend.post-category.index')->with('postCategories', $postCategories);
    }

    public function create()
    {
        return view('backend.post-category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = PostCategory::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        PostCategory::create($data);
        return redirect()->route('post-category.index');
    }

    public function edit($id)
    {
        $postCategory = PostCategory::findOrFail($id);
        return view('backend.post-category.edit')->with('postCategory', $postCategory);
    }

    public function update(Request $request, $id)
    {
        $postCategory = PostCategory::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $postCategory->fill($data)->save();
        return redirect()->route('post-category.index');
    }

    public function destroy($id)
    {
        try {
            PostCategory::findOrFail($id)->delete();
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
}
