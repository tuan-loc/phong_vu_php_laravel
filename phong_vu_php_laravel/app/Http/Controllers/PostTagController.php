<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostTagController extends Controller
{
    public function index()
    {
        $postTag = PostTag::orderBy('id', 'DESC')->paginate(10);
        return view('backend.post-tag.index')->with('postTags', $postTag);
    }

    public function create()
    {
        return view('backend.post-tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = PostTag::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        PostTag::create($data);
        return redirect()->route('post-tag.index');
    }

    public function edit($id)
    {
        $postTag = PostTag::findOrFail($id);
        return view('backend.post-tag.edit')->with('postTag', $postTag);
    }

    public function update(Request $request, $id)
    {
        $postTag = PostTag::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $postTag->fill($data)->save();
        return redirect()->route('post-tag.index');
    }

    public function destroy($id)
    {
        try {
            PostTag::findOrFail($id)->delete();
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
