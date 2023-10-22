<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route($request->user()->role);
    }

    public function home()
    {
        $main_carousels = Banner::where('status', 'active')->where('banner_type', 'main_carousel')->orderBy('id', 'DESC')->limit(10)->get();
        $carousel_rights = Banner::where('status', 'active')->where('banner_type', 'carousel_right')->orderBy('id', 'DESC')->limit(2)->get();
        $banner_bottoms = Banner::where('status', 'active')->where('banner_type', 'banner_bottom')->orderBy('id', 'DESC')->limit(4)->get();
        $banner_tabs = Banner::where('status', 'active')->where('banner_type', 'banner_tab')->orderBy('id', 'DESC')->limit(5)->get();
        $banner_news = Banner::where('status', 'active')->where('banner_type', 'banner_news')->orderBy('id', 'DESC')->limit(3)->get();
        $banner_products = Banner::where('status', 'active')->where('banner_type', 'banner_products')->orderBy('id', 'DESC')->limit(6)->get();
        $brands = Brand::where('status', 'active')->orderBy('id', 'DESC')->limit(16)->get();
        $categories = Category::where('status', 'active')->where('parent_id', 0)->orderBy('name', 'ASC')->get();
        $product_categories = Category::where('status', 'active')->where('parent_id', 0)->orderBy('id', 'ASC')->limit(6)->get();
        for ($i = 0; $i < count($product_categories); $i++) {
            $product_categories[$i]['products'] = $this->getProductsByCategory($product_categories[$i]->id, 4);
            $product_categories[$i]['banner_products'] = $banner_products[$i]->photo;
        }
        $product_hots = Product::where('status', 'active')->where('condition', 'hot')->limit(10)->get();
        $product_news = Product::where('status', 'active')->where('condition', 'new')->limit(10)->get();
        $products = Product::where('status', 'active')->orderBy('id', 'DESC')->limit(20)->get();
        return view('frontend.index')
            ->with('main_carousels', $main_carousels)
            ->with('carousel_rights', $carousel_rights)
            ->with('banner_bottoms', $banner_bottoms)
            ->with('banner_tabs', $banner_tabs)
            ->with('banner_news', $banner_news)
            ->with('brands', $brands)
            ->with('product_categories', $product_categories)
            ->with('product_hots', $product_hots)
            ->with('product_news', $product_news)
            ->with('products', $products)
            ->with('categories', $categories);
    }

    private function getProductsByCategory($categoryId, $limit)
    {
        $products = Product::where('status', 'active')->where('cat_id', $categoryId)->where('is_featured', 1)->orderBy('id', 'DESC')->limit($limit)->get();
        return $products;
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function registerSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        Session::put('user', $data['email']);
        if ($check) {
            return redirect()->route('login.form');
        } else {
            return back();
        }
    }

    private function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'status' => 'active',
        ]);
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function loginSubmit(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {
            Session::put('user', $data['email']);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        return back();
    }

    public function productDetail($slug)
    {
        $product_detail = Product::getProductBySlug($slug);
        $product_brands = Product::getProductsByBrand($product_detail->brand->id);
        return view('frontend.pages.product-detail')
            ->with('product_detail', $product_detail)
            ->with('product_brands', $product_brands);
    }

    public function productSearch(Request $request)
    {
        $products = Product::orwhere('name', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('slug', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('description', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('summary', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('price', 'like', '%' . $request['keyword'] . '%')
            ->orderBy('id', 'DESC')
            ->paginate(20);
        return view('frontend.pages.product-lists')->with('products', $products);
    }

    public function productLists()
    {
        $products = Product::query()->where('status', 'active')->paginate(20);
        return view('frontend.pages.product-lists')->with('products', $products);
    }

    public function productCategory(Request $request)
    {
        $products = Product::getProductsByCategory($request->id);
        return view('frontend.pages.product-lists')->with('products', $products);
    }

    public function productBrand(Request $request)
    {
        $products = Product::getProductListByBrand($request->id);
        return view('frontend.pages.product-lists')->with('products', $products);
    }

    public function productFilter()
    {
        $products = Product::query();
        if (!empty($_GET['khuyen-mai-tot-nhat'])) {
            $products = $products->orderBy('discount', 'DESC')->paginate(20);
        }
        if (!empty($_GET['noi-bat'])) {
            $products = $products->where('is_featured', 1)->paginate(20);
        }
        if (!empty($_GET['hot'])) {
            $products = $products->where('condition', 'hot')->paginate(20);
        }
        if (!empty($_GET['new'])) {
            $products = $products->where('condition', 'new')->paginate(20);
        }
        if (!empty($_GET['sort-by'])) {
            $products = $products->where('price', $_GET['sort-by'])->paginate(20);
        }
        if (!empty($_GET['minPrice']) || !empty($_GET['maxPrice'])) {
            $minPrice = !empty($_GET['minPrice']) ? $_GET['minPrice'] : 0;
            $maxPrice = !empty($_GET['maxPrice']) ? $_GET['maxPrice'] : PHP_INT_MAX;
            $products = $products->whereBetween('price', [$minPrice, $maxPrice])->paginate(20);
        }
        return view('frontend.pages.product-lists')->with('products', $products);
    }
}