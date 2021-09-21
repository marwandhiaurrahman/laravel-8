<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('user::index', compact(['users']))->with(['i' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
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
            'username' => 'required|unique:users,username|alpha_dash',
            'email' => 'required|email|unique:users,username,'.$user->id,
            'phone' => 'required|numeric',

        ]);

        $request['password'] =  Hash::make($request->username);

        User::updateOrCreate($request->only([
            'name',
            'email',
            'username',
            'phone',
            'password',
        ]));

        Alert::success('Success Info', 'Success Message');
        return redirect()->route('user.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        return view('user::edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_dash|unique:users,username,'.$user->id,
            'email' => 'required|email|unique:users,username,'.$user->id,
            'phone' => 'required|numeric',
        ]);

        $user->update($request->all());
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('Success Info', 'Success Message');
        return redirect()->route('user.index');
    }
}
