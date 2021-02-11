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
    <div class="col-md-12">
    <a href="{{url('admin/products/create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add Product</a>
        <br>
        <br>
        @include('admin.partials.flash', ['$errors' => $errors])
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sku</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                          </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->status}}</td>
                               
                                <td>
                                  <a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
                                  {!! Form::open(['url' => 'admin/products/'.$product->id, 'class' => 'delete','display:inline-block']) !!}
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
            </div>
          </div>
          {{$products->links()}}
        </div>
    </div>
</div>


@endsection
@push('bottom')

@endpush