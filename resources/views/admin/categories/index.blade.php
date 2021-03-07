@extends('admin.layout')
@section('title','Categories')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Categories</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Categories</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-12">
      @can('add_categories')
        <a href="{{url('admin/categories/create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add Category</a>
        @endcan
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
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Action</th>
                           
                          </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->parent ? $category->parent->name : ''}}</td>
                                <td>
                                  @can('edit_categories')
                                  <a href="{{url('admin/categories/'.$category->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
                                  @endcan
                                  @can('delete_categories')
                                    {!! Form::open(['url' => 'admin/categories/'.$category->id, 'class' => 'delete','display:inline-block']) !!}
                                    {!! Form::hidden('_method','DELETE') !!}
                                    {!! Form::submit('remove', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                    
                                  @endcan
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
          {{$categories->links()}}
        </div>
    </div>
</div>


@stop
@push('bottom')

@endpush