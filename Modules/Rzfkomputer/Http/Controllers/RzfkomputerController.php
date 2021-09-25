<?php

namespace Modules\Rzfkomputer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Entities\Customer;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\OrderDetail;
use Modules\Product\Entities\CategoryProduct;
use Modules\Product\Entities\Product;
use RealRashid\SweetAlert\Facades\Alert;

class RzfkomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categoris = CategoryProduct::get();
        $products = Product::latest()->get();
        return view('rzfkomputer::user.home', compact(['categoris', 'products']))->with(['i' => 0]);
    }

    public function store_order(Request $request)
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

        $id = $order->invoice;

        Alert::success('Success Info', 'Success Message');
        return redirect()->route('ordersuccess', compact('id'));
    }

    public function order_success(Request $request)
    {
        $order = Order::where('invoice', $request->id)->first();
        return view('rzfkomputer::user.order-success', compact('order'));
    }

    public function cart_store(Request $request)
    {
        $product = Product::find($request->product_id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => (!empty($product->images->first()->image)) ? 'storage/product-image/' . $product->images->first()->image : 'assets/img/dummy/placeholder-product.png',
            ],
        ]);

        Alert::success('Success Info', 'Success Message');
        return back()->withInput();
    }

    public function cart_destroy($id)
    {
        \Cart::remove($id);
        Alert::success('Success Info', 'Success Message');
        return back()->withInput();
    }

    public function product_list()
    {
        $categoris = CategoryProduct::get();
        $products = Product::latest()->get();
        return view('rzfkomputer::user.produk', compact(['categoris', 'products']));
    }

    public function product_detail(Product $product)
    {
        $categoris = CategoryProduct::get();
        // $products = Product::latest()->get();
        // dd($product);
        return view('rzfkomputer::user.produk-detail', compact(['categoris', 'product']));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('rzfkomputer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('rzfkomputer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('rzfkomputer::edit');
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
    public function destroy($id)
    {
        //
    }
}
