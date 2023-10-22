<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'status',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'brand_id', 'id')->where('status', 'active');
    }

    public static function getProductsByBrand($brandId)
    {
        return Brand::with('products')->where('id', $brandId)->get();
    }
}
