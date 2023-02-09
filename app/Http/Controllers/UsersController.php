<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name', 'comment', 'created_at'])->latest()->paginate(4);
        return view('welcome', compact('users'));
    }

    public function store(UserRequest $request)
    {
        User::create($request->only(['name', 'comment']));
        return redirect()->route('users');
    }
}
