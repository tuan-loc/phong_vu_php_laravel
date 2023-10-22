<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::getAllPost();
        return view('backend.post.index')->with('posts', $posts);
    }

    public function create()
    {
        $categories = PostCategory::get();
        $tags = PostTag::get();
        $users = User::get();
        return view('backend.post.create')->with('users', $users)->with('categories', $categories)->with('tags', $tags);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'quote' => 'string|nullable',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'string|nullable',
            'tags' => 'nullable',
            'added_by' => 'nullable',
            'post_cat_id' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Post::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $tags = $request->input('tags');
        if ($tags) {
            $data['tags'] = implode(', ', $tags);
        } else {
            $data['tags'] = '';
        }
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = PostCategory::get();
        $tags = PostTag::get();
        $users = User::get();
        return view('backend.post.edit')->with('categories', $categories)->with('users', $users)->with('tags', $tags)->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required',
            'quote' => 'string|nullable',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'string|nullable',
            'tags' => 'nullable',
            'added_by' => 'nullable',
            'post_cat_id' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $tags = $request->input('tags');
        if ($tags) {
            $data['tags'] = implode(',', $tags);
        } else {
            $data['tags'] = '';
        }
        $post->fill($data)->save();
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        try {
            Post::findOrFail($id)->delete();
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