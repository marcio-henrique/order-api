<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\LineItemResource;
use App\Models\LineItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LineItemController extends Controller
{
    public function index()
    {
        return LineItemResource::collection(LineItem::all());
    }

    public function store(Request $request)
    {
        $lineItem = new LineItem();
        $lineItem->quantity = $request->quantity;
        $lineItem->order_id = $request->order_id;
        $lineItem->product_id = $request->product_id;
        $lineItem->save();

        return response()->json(['message' => 'LineItem Created']);
    }

    public function show($id)
    {
        return new LineItemResource(LineItem::find($id));
    }

    public function update(Request $request, $id)
    {
        $lineItem = LineItem::find($id);
        $lineItem->quantity = $request->quantity;
        $lineItem->save();

        return response()->json(['message' => 'LineItem Updated']);
    }

    public function destroy($id)
    {
        LineItem::destroy($id);

        return response()->json(['message' => 'LineItem Deleted']);
    }
}
