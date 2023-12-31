<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new OrderCollection(Order::with(['user', 'products'])->where('state', 0)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardando el pedido
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->total = $request->total;
        $order->save();
        // Guardando los productos del pedido
        $order_id = $order->id;
        $products = $request->products;
        $order_products = [];
        foreach($products as $p) {
            $order_products[] = [
                'order_id' => $order_id,
                'product_id' => $p['id'],
                'quantity' => $p['quantity'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        OrderProducts::insert($order_products);

        return [
            'message' => 'Ya tomamos tu pedido, ¡en minutos te lo estaremos enviando!',
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->state = 1;
        $order->save();
        return ['order' => $order];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
