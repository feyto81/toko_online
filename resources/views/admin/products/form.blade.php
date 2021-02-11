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
    <div class="col-md-6">
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
