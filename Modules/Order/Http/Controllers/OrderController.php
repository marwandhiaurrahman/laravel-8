<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Entities\Customer;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\OrderDetail;
use Modules\Product\Entities\Product;
use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $orders = Order::latest()->get();
        $products = Product::latest()->get();
        $carts = \Cart::getContent();
        return view('order::index', compact(['orders', 'products', 'carts']))->with(['i' => 0, 'j' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $carts = \Cart::getContent();
        return view('order::create', compact(['carts']))->with(['i' => 0, 'j' => 0]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $customer = Customer::updateOrCreate($request->only(['name', 'address', 'email', 'phone']));

        $order = Order::create([
            'invoice' => uniqid(),
            'total_price' => \Cart::getTotal(),
            'status' => '1',
            'customer_id' => $customer->id,
        ]);

        $carts = \Cart::getContent();

        foreach ($carts as $item) {

            $orderDetail = OrderDetail::create([
                'product_id' => $item->id,
                'order_id' => $order->id,
                'quantity' => $item->quantity,
                'price' => $item->price * $item->quantity,
            ]);
        }

        \Cart::clear();

        Alert::success('Success Info', 'Success Message');
        return redirect()->route('order.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Order $order)
    {
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        // dd($orderDetails);
        return view('order::show', compact(['order','orderDetails']))->with(['i'=>0]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('order::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Order $order)
    {
        $order->delete();
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('order.index');
    }
}
