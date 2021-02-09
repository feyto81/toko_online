<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Session;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        $this->data['categories'] = Category::orderBy('name', 'ASC')->paginate(10);
        return view('admin.categories.index', $this->data);
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $this->data['categories'] =  $categories->toArray();
        $this->data['category'] = null;
        return view('admin.categories.form', $this->data);
    }
    public function store(CategoryRequest $request)
    {
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['name']);
        $params['parent_id'] = (int)$params['parent_id'];
        if (Category::create($params)) {
            Session::flash('success', 'Category has been saved');
        }
        return redirect('admin/categories');
    }

    public function edit($id)
    {
        // $category = Category::findOrFail($id);
        // $categories = Category::orderBy('name', 'asc')->get();
        // $this->data['categories'] =  $categories->toArray();
        // $this->data['category'] = $category;
        // return view('admin.categories.form', $this->data);
        $category = Category::findOrFail($id);
        $this->data['categories'] = Category::orderBy('name', 'asc')->get();
        $this->data['category'] = $category;
        $this->data['title'] = 'Edit Category';
        return view('admin.categories.form', $this->data);
    }

    public function update(CategoryRequest $request, $id)
    {
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['name']);
        $category = Category::findOrFail($id);

        if ($category->update($params)) {
            Session::flash('success', 'Category has been updated.');
        }
        return redirect('admin/categories');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->delete()) {
            Session::flash('success', 'Category has been deleted.');
        }
        return redirect('admin/categories');
    }
}
