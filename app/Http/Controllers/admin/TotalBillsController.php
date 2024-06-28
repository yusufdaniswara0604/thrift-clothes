<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalBillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBills = OrderItem::with(['order.user', 'product'])
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->selectRaw('order_items.product_id, orders.user_id, SUM(order_items.quantity) as total_quantity')
            ->groupBy('order_items.product_id', 'orders.user_id')
            ->get();

        return view('admin.total-bills.index', compact('totalBills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
