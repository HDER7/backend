<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.productVariant.product')
            ->where('user_id', auth()->id())
            ->get();

        return response()->json($orders);
    }

}
