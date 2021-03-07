<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Authorizable;

class DashboardController extends Controller
{
    use Authorizable;

    public function index()
    {
        return view('admin.dashboard.index');
    }
}
