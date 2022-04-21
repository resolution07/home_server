<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserCreateRequest;
use App\Models\Role;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $data['users'] = User::query()->paginate(10);
        $data['roles'] = Role::query()->get();

        return view('admin.users.list', $data);
    }

    public function create(UserCreateRequest $request)
    {
        $userData = $request->user;
        $userRoles = $request->roles;

        User::query()->create($userData)
            ->roles()->attach($userRoles);

        return redirect()->route('users.index')->setStatusCode(302);
    }

    public function read()
    {
    }
}
