<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'quantity',
        'amount',
        'price',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public static function getAllProductFromCart($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") {
                $user_id = auth()->user()->id;
            }
            return Cart::with('product')->where('user_id', $user_id)->where('order_id', null)->get();
        } else {
            return;
        }
    }

    public static function totalCartPrice($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") {
                $user_id = auth()->user()->id;
            }

            return Cart::where('user_id', $user_id)->where('order_id', null)->sum('amount');
        } else {
            return redirect('/login');
        }
    }
}
