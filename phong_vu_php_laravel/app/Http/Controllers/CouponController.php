<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    public function index()
    {
        $coupon = Coupon::orderBy('id', 'DESC')->paginate('10');
        return view('backend.coupon.index')->with('coupons', $coupon);
    }

    public function create()
    {
        return view('backend.coupon.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'string|required',
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        Coupon::create($data);
        return redirect()->route('coupon.index');
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon) {
            return view('backend.coupon.edit')->with('coupon', $coupon);
        } else {
            return view('backend.coupon.index')->with('error', 'Coupon not found');
        }
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $this->validate($request, [
            'code' => 'string|required',
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $coupon->fill($data)->save();
        return redirect()->route('coupon.index');
    }

    public function destroy($id)
    {
        try {
            Coupon::findOrFail($id)->delete();
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
