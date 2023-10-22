<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::orderBy('id', 'DESC')->paginate();
        return view('backend.brand.index')->with('brands', $brand);
    }

    public function create()
    {
        return view('backend.brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'photo' => 'string|required',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Brand::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $status = Brand::create($data);
        return redirect()->route('brand.index');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit')->with('brand', $brand);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $this->validate($request, [
            'name' => 'string|required',
        ]);
        $data = $request->all();

        $brand->fill($data)->save();
        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        try {
            Brand::findOrFail($id)->delete();
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
