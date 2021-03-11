<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Authorizable;
use Session;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        dd($permissions);
    }
}
