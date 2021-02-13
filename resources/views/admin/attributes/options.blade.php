@extends('admin.layout')
@section('title','Attribute Options')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Attribute Options</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Catalog</a></li>
    <li class="breadcrumb-item"><a href="#">Attribute Option</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-7">
    
        
        
        <div class="tile">
            
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                <th style="width:10%">#</th>
                                <th>Name</th>
                                <th style="width:30%">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @forelse ($attribute->attributeOptions as $option)
                            <tr>    
                                <td>{{ $option->id }}</td>
                                <td>{{ $option->name }}</td>
                                <td>
                                    @can('edit_attributes')
                                        <a href="{{ url('admin/attributes/options/'. $option->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                                    @endcan

                                    @can('delete_attributes')
                                        {!! Form::open(['url' => 'admin/attributes/options/'. $option->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No records found</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
              
            </div>
            
          </div>
         
    </div>
</div>


@endsection
@push('bottom')

@endpush
