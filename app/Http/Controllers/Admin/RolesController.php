<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleCreateRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index(Role $role)
    {
        return view('admin.roles.list', ['roles' => Role::query()->paginate(10)]);
    }

    public function create(RoleCreateRequest $request)
    {
        Role::query()->create($request->toArray());
        return redirect()->route('roles.index')->setStatusCode(302);
    }

    public function read(int $id)
    {
        return view('admin.roles.detail', ['role' => Role::query()->find($id)]);
    }

    public function update(int $id, RoleCreateRequest $request)
    {
        // return
    }
}
