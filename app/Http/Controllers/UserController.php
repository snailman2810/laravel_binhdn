<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::listUser();

        return view('users.list', compact('users'));
    }

    public function create()
    {
        return view('users.register');
    }

    public function store(CreateUserRequest $request)
    {
        $request->validated();
        $data = User::create($request);
        if (!empty($data)) {
            return redirect()->route('users.index')->with('success','Thêm mới người dùng thành công.');
       }

       return redirect()->route('users.index')->with('fail','Thêm mới người dùng thất bại.');
    }
}
