<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Save the order to the database without the image URL
        Order::create([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Update the order without any image change
        $order->update([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function show($id)
{
    // Find the order by its ID
    $order = Order::findOrFail($id);

    // Pass the order to the details view
    return view('orders.details', compact('order'));
}


    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
