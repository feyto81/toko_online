<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $this->data['products'] = Product::orderBy('name', 'ASC')->paginate(10);
        return view('admin.products.index', $this->data);
    }
}
