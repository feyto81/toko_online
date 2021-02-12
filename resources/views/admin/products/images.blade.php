@extends('admin.layout')
@section('title','Products')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Products</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Product</a></li>
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
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            
                            <th>Uploaded At</th>
                            <th>Action</th>
                           
                          </tr>
                    </thead>
                    <tbody>
                        @forelse($productImages as $image)
                            <tr>
                                <td>{{$image->id}}</td>
                                <td><img src="{{asset('storage/'.$image->path)}}" style="width: 150px"></td>
                                <td>{{$image->created_at}}</td>
                                <td>
                                  {!! Form::open(['url' => 'admin/products/images/'.$image->id, 'class' => 'delete','display:inline-block']) !!}
                                  {!! Form::hidden('_method','DELETE') !!}
                                  {!! Form::submit('remove', ['class' => 'btn btn-sm btn-danger']) !!}
                                  {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No record found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <a href="{{ url('admin/products/'.$productID.'/add-image') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add New</a>
            </div>
          </div>
          
        </div>
    </div>
</div>


@endsection
@push('bottom')

@endpush