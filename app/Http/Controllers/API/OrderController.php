<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Order::all());
    }


    public function store(Request $request)
    {
        $order = new Order();
        $order->total = $request->total;
        $order->customer_id = $request->customer_id;
        $order->save();

        return response()->json(['message' => 'Order Created']);
    }

    public function show($id)
    {
        return new OrderResource(Order::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->total = $request->total;
        $order->save();

        return response()->json(['message' => 'Order Updated']);
    }

    public function destroy($id)
    {
        Order::destroy($id);

        return response()->json(['message' => 'Order Deleted']);
    }
}
