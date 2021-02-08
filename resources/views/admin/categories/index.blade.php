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
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Action</th>
                            <th>Salary</th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                        </tr>
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