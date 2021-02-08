@extends('admin.layout')
@section('title','Add Categories')

@section('content')
@php
    $formtitle = !empty($category) ? 'update' : 'Add'   
@endphp
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> {{$formtitle}} Categories</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Add Categories</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-6">
    <a href="{{url('admin/categories')}}" class="btn btn-sm btn-info"><i class="fa fa-long-arrow-left "></i></a>
        <br>
        <br>
        <div class="tile">
            
            <div class="tile-body">
              @if(!empty($category))
                {!! Form::model($category, ['url' => ['admin/categories', $category->id], 'method'  => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['url'   => 'admin/categories']) !!}
              @endif
              <div class="form-group">
                
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
    </div>
</div>


@endsection
@push('bottom')

@endpush
{{-- <form>
    <div class="form-group">
      <label class="control-label">Name</label>
      <input class="form-control" type="text" placeholder="Enter full name">
    </div>
    <div class="form-group">
      <label class="control-label">Email</label>
      <input class="form-control" type="email" placeholder="Enter email address">
    </div>
    <div class="form-group">
      <label class="control-label">Address</label>
      <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
    </div>
    <div class="form-group">
      <label class="control-label">Gender</label>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="gender">Male
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="gender">Female
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label">Identity Proof</label>
      <input class="form-control" type="file">
    </div>
    <div class="form-group">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox">I accept the terms and conditions
        </label>
      </div>
    </div>
  </form> --}}