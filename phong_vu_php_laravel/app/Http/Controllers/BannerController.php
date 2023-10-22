<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banner.index')->with('banners', $banner);
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        Banner::create($data);
        return redirect()->route('banner.index');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit')->with('banner', $banner);
    }

    public function update(Request $request, string $id)
    {
        $banner = Banner::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $banner->fill($data)->save();
        return redirect()->route('banner.index');
    }

    public function destroy($id)
    {
        try {
            Banner::findOrFail($id)->delete();
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
