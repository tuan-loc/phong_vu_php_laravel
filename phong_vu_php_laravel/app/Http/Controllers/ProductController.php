<?php

namespace App\Http\Controllers;

use App\Helper\CategoryRecursive;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    private $productImage;

    public function __construct(Category $category, Product $product, ProductImage $productImage)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
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
        $products = Product::getAllProduct();
        return view('backend.product.index')->with('products', $products);
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        $brands = Brand::get();
        $categories = Category::get();
        return view('backend.product.create')->with('categories', $categories)->with('brands', $brands)->with('htmlOption', $htmlOption);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            'detail' => 'string|nullable',
            'photo' => 'string|required',
            'stock' => "required|numeric",
            'cat_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'is_featured' => 'sometimes|in:1',
            'status' => 'required|in:active,inactive',
            'condition' => 'required|in:default,new,hot',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $data['is_featured'] = $request->input('is_featured', 0);
        $product = Product::create($data);
        if ($request->hasFile('image_path')) {
            foreach ($request->image_path as $fileItem) {
                $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                $product->images()->create([
                    'image_path' => $dataProductImageDetail['file_path'],
                    'image_name' => $dataProductImageDetail['file_name'],
                ]);
            }
        }
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $brand = Brand::get();
        $product = Product::findOrFail($id);
        $category = Category::get();
        $items = Product::where('id', $id)->get();
        $htmlOption = $this->getCategory($product->cat_id);
        return view('backend.product.edit')->with('product', $product)
            ->with('brands', $brand)
            ->with('categories', $category)->with('items', $items)->with('htmlOption', $htmlOption);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            'detail' => 'string|nullable',
            'photo' => 'string|required',
            'stock' => "required|numeric",
            'cat_id' => 'required|exists:categories,id',
            'is_featured' => 'sometimes|in:1',
            'brand_id' => 'nullable|exists:brands,id',
            'status' => 'required|in:active,inactive',
            'condition' => 'required|in:default,new,hot',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
        ]);
        $data = $request->all();
        $data['is_featured'] = $request->input('is_featured', 0);
        $productUpdate = $product->update($data);
        if ($request->hasFile('image_path')) {
            $this->productImage->where('product_id', $id)->delete();
            foreach ($request->image_path as $fileItem) {
                $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                $product->images()->create([
                    'image_path' => $dataProductImageDetail['file_path'],
                    'image_name' => $dataProductImageDetail['file_name'],
                ]);
            }
        }
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        try {
            Product::findOrFail($id)->delete();
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
