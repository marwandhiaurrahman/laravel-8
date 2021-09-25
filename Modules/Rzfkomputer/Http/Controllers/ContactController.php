<?php

namespace Modules\Rzfkomputer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Rzfkomputer\Entities\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('rzfkomputer::contact.index',compact('contacts'))->with(['i'=>0]);
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
            'label' => 'required',
            'phone' => 'required',
        ]);

        Contact::create($request->all());
        // Alert::success('Success Info', 'Success Message');
        return redirect()->route('contact.index')->with('success', 'Data Created');
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
    public function edit(Contact $contact)
    {
        return view('rzfkomputer::contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'label' => 'required',
            'phone' => 'required|numeric',
        ]);

        $contact->update($request->all());
        // Alert::success('Success Info', 'Success Message');
        return redirect()->route('contact.index')->with('success', 'Data Created');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        // Alert::success('Success Info', 'Success Message');
        return redirect()->route('contact.index')->with('success', 'Data Created');
    }
}