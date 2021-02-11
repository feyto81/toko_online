<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $this->data['products'] = Product::orderBy('name', 'ASC')->paginate(10);
        return view('admin.products.index', $this->data);
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $this->data['categories'] = $categories->toArray();
        $this->data['product'] = null;
        // dd($this->data);
        return view('admin.products.form', $this->data);
    }
}
