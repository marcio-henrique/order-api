<?php

namespace App\Http\Controllers\API;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }


    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->street = $request->street;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->country = $request->country;
        $customer->save();

        return response()->json(['message' => 'Customer Created']);
    }

    public function show($id)
    {
        return Customer::find($id);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->street = $request->street;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->country = $request->country;
        $customer->save();

        return response()->json(['message' => 'Customer Updated']);
    }

    public function destroy($id)
    {
        Customer::destroy($id);

        return response()->json(['message' => 'Customer Deleted']);
    }
}
