<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\CategoryProduct;
use Modules\Product\Entities\ImageProduct;
use Modules\Product\Entities\Product;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $products = Product::latest()->get();
        $categoris = CategoryProduct::latest()->get();
        return view('product::index', compact(['products', 'categoris']))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // $kategoris = Kate
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|min:0|numeric',
            'price' => 'required|min:0|numeric',
            'category' => 'required',
            'review' => 'required',
            'promo' => 'required|min:0|max:100|numeric',
            'spesification' => 'required',
            'image' => 'required',
        ]);


        $product =  Product::updateOrCreate($request->only([
            'name',
            'description',
            'stock',
            'price',
            'status',
            'promo',
            'review',
            'spesification',
        ]));

        $product->category()->attach($request->category);

        if (!empty($request->image)) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('storage/product-image'), $imageName);
        }
        $request->image = $imageName;

        ImageProduct::updateOrCreate([
            'image' => $request->image,
            'name' => $request->name,
            'product_id' => $product->id,
        ]);

        Alert::success('Success Info', 'Success Message');
        return redirect()->route('product.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Product $product)
    {
        $categoris = CategoryProduct::latest()->get();
        $category = $product->category()->first();
        return view('product::edit', compact(['product', 'categoris', 'category']));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|min:0',
            'price' => 'required|min:0',
            'category' => 'required',
            'review' => 'required',
            'spesification' => 'required',
        ]);

        // dd($request->all());

        $product->update($request->all());
        $product->category()->sync($request->category);

        Alert::success('Success Info', 'Success Message');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('product.index');
    }
}
