@extends('admin.layout')
@section('title','Add Categories')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Add Categories</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Add Categories</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-12">
    <a href="{{url('admin/categories')}}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i>Back</a>
        <br>
        <br>
        
    </div>
</div>


@stop
@push('bottom')

@endpush