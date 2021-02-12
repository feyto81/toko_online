@extends('admin.layout')
@section('title','Product')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Upload Image Product</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Upload Image Product</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-4">
      
      @include('admin.products.product_menus')
    </div>
    <div class="col-md-8">
        
        @include('admin.partials.flash', ['$errors' => $errors])
        
        <div class="tile">
            
            <div class="tile-body">
                {!! Form::open(['url' => ['admin/products/images', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('image', 'Product Image') !!}
                    {!! Form::file('image', ['class' => 'form-control-file', 'placeholder' => 'product image']) !!}
                </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href="{{ url('admin/products/'.$productID.'/images') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
          {!! Form::close() !!}
    </div>
</div>


@endsection
@push('bottom')

@endpush
