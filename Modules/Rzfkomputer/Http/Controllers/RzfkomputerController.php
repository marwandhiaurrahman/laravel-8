<?php

namespace Modules\Rzfkomputer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\CategoryProduct;
use Modules\Product\Entities\Product;

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
