<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\ColorProduct;
use Modules\Product\Entities\Product;
use RealRashid\SweetAlert\Facades\Alert;

class ColorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Product $product)
    {
        $colors = ColorProduct::where('product_id', $product->id)->get();
        return view('product::color', compact(['product','colors']))->with(['i' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'product_id' => 'required',
        ]);

        ColorProduct::updateOrCreate($request->only([
            'name',
            'code',
            'product_id',
        ]));
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('color.index', compact(['product']));
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
    public function edit($id)
    {
        return view('product::edit');
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
    public function destroy(Product $product, ColorProduct $color)
    {
        $color->delete();
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('color.index', compact(['product']));
    }
}
