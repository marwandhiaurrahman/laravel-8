<?php

namespace Modules\Rzfkomputer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Rzfkomputer\Entities\Office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $offices = Office::get();
        return view('rzfkomputer::office.index', compact('offices'))->with(['i' => 0]);
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
        ]);

        Office::create($request->all());
        return redirect()->route('office.index')->with('success', 'Data Created');
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
    public function edit(Office $office)
    {
        return view('rzfkomputer::office.edit',compact('office'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Office $office)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
        ]);

        $office->update($request->all());
        return redirect()->route('office.index')->with('success', 'Data Created');
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
