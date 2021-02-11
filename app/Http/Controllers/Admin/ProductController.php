<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Str;
use Auth;
use DB;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->data['statuses'] = Product::statuses();
    }
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
        $this->data['categoryIDs'] = null;
        // dd($this->data);
        return view('admin.products.form', $this->data);
    }

    public function store(ProductRequest $request)
    {
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['name']);
        $params['user_id'] = Auth::user()->id;

        $saved = false;
        $saved = DB::transaction(function () use ($params) {
            $product = Product::create($params);
            $product->categories()->sync($params['category_ids']);

            return true;
        });

        if ($saved) {
            Session::flash('success', 'Product has been saved');
        } else {
            Session::flash('error', 'Product could not be saved');
        }

        return redirect('admin/products');
    }
}
