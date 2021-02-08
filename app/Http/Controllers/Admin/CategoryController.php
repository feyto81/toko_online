<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::orderBy('name', 'ASC')->paginate(10);
        return view('admin.categories.index', $this->data);
    }
}
