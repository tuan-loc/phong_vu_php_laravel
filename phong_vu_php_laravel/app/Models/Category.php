<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'summary',
        'photo',
        'status',
        'parent_id',
        'added_by',
    ];

    public function parent_info()
    {
        return $this->hasOne('App\Models\Category', 'id', 'parent_id');
    }

    public static function getAllCategory()
    {
        return Category::orderBy('id', 'DESC')->with('parent_info')->paginate(10);
    }

    public static function getChildByParentId($id)
    {
        return Category::where('parent_id', $id)->orderBy('id', 'ASC')->pluck('name', 'id');
    }

    public function child_cat()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id')->where('status', 'active');
    }

    public static function getParent($parentId)
    {
        return Category::where('id', $parentId)->where('status', 'active')->first();
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'id')->where('status', 'active');
    }

    public static function getProductsByCat($categoryId)
    {
        return Category::with('products')->where('cat_id', $categoryId)->get();
    }

    public static function getParents()
    {
        return Category::where('parent_id', 0)->get();
    }
}
