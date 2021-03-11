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
    use Authorizable;

    public function index()
    {
        $data['roles'] = Role::all();
        $data['permissions'] = Permission::all();
        return view('admin.roles.index', $data);
    }
}
