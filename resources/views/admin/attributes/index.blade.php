@extends('admin.layout')
@section('title','Attribute Option')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Attribute Option</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Attribute Option</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-12">
    <a href="{{url('admin/categories/create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add Category</a>
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
                            <th>Code</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Action</th>
                           
                          </tr>
                    </thead>
                    <tbody>
                        @forelse($attributes as $attribute)
                            <tr>
                                <td>{{$attribute->id}}</td>
                                <td>{{$attribute->code}}</td>
                                <td>{{$attribute->name}}</td>
                                <td>{{$attribute->type}}</td>
                                <td>
                                  {{-- <a href="{{url('admin/categories/'.$category->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
                                  {!! Form::open(['url' => 'admin/categories/'.$category->id, 'class' => 'delete','display:inline-block']) !!}
                                  {!! Form::hidden('_method','DELETE') !!}
                                  {!! Form::submit('remove', ['class' => 'btn btn-sm btn-danger']) !!}
                                  {!! Form::close() !!} --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No record found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
          </div>
          
        </div>
    </div>
</div>


@stop
@push('bottom')

@endpush