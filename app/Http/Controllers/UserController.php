<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['permission:admin']);
    // }

    public function index()
    {
        $this->authorize('admin');

        $users = User::with('permissions');

        return view('users.index', [
            'users' => $users->paginate(10)
        ]);
    }

    public function create()
    {
        return redirect('users')->withToastSuccess('olá!');
        // return redirect('users')->withSuccess('olá!');
        //return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user->load('permissions')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'editar usuário';
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
        echo 'apagar usuário';
    }
}
