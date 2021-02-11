@extends('admin.layout')
@section('title','Add Product')

@section('content')
@php
    $formtitle = !empty($product) ? 'Update' : 'Add'   
@endphp
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> {{$formtitle}} Product</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Add Product</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-12">
    <a href="{{url('admin/products')}}" class="btn btn-sm btn-info"><i class="fa fa-long-arrow-left "></i></a>
        <br>
        <br>
        @include('admin.partials.flash', ['$errors' => $errors])
        
        <div class="tile">
            
            <div class="tile-body">
              @if(!empty($product))
                {!! Form::model($product, ['url' => ['admin/products', $product->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
                {!! Form::hidden('type') !!}
              @else
                {!! Form::open(['url' => 'admin/products']) !!}
              @endif
              <div class="form-group">
                {!! Form::label('sku', 'SKU') !!}
                {!! Form::text('sku', null, ['class' => 'form-control', 'placeholder' => 'sku']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'price']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_ids', 'Category') !!}
                {!! General::selectMultiLevel('category_ids[]', $categories, ['class' => 'form-control', 'multiple' => true, 'selected' => !empty(old('category_ids')) ? old('category_ids') : $categoryIDs, 'placeholder' => '-- Choose Category --']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('short_description', 'Short Description') !!}
                {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'short description']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('weight', 'Weight') !!}
                {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'weight']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('length', 'Length') !!}
                {!! Form::text('length', null, ['class' => 'form-control', 'placeholder' => 'length']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('width', 'Width') !!}
                {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'width']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('height', 'Height') !!}
                {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'height']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status', $statuses , null, ['class' => 'form-control', 'placeholder' => '-- Set Status --']) !!}
            </div>
               
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
          {!! Form::close() !!}
    </div>
</div>


@endsection
@push('bottom')

@endpush
