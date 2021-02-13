@extends('admin.layout')
@section('title','Attribute')

@section('content')
@php
    $formtitle = !empty($attribute) ? 'Update' : 'Add';
    $disableInput = !empty($attribute) ? true : false;   
@endphp
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> {{$formtitle}} Attribute</h1>
    <p>A free and open source Bootstrap 4 admin template</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Catalog</a></li>
    <li class="breadcrumb-item"><a href="#">Attribute</a></li>
  </ul>
</div>
<div class="row">
    <div class="col-md-6">
    
        @include('admin.partials.flash', ['$errors' => $errors])
        
        <div class="tile">
            
            <div class="tile-body">
              @if(!empty($attribute))
                {!! Form::model($attribute, ['url' => ['admin/attributes', $attribute->id], 'method'  => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['url'   => 'admin/attributes']) !!}
              @endif
              <fieldset class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <legend class="col-form-label pt-0">General</legend>
                        <div class="form-group">
                            {!! Form::label('code', 'Code') !!}
                            {!! Form::text('code', null, ['class' => 'form-control', 'readonly' => $disableInput]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                                {!! Form::label('type', 'Type') !!}
                                {!! Form::select('type', $types , null, ['class' => 'form-control', 'placeholder' => '-- Set Type --', 'readonly' => $disableInput]) !!}
                        </div>

                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <legend class="col-form-label pt-0">Validation</legend>
                        <div class="form-group">
                                {!! Form::label('is_required', 'Is Required?') !!}
                                {!! Form::select('is_required', $booleanOptions , null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                                {!! Form::label('is_unique', 'Is Unique?') !!}
                                {!! Form::select('is_unique', $booleanOptions , null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                                {!! Form::label('validation', 'Validation') !!}
                                {!! Form::select('validation', $validations , null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <legend class="col-form-label pt-0">Configuration</legend>
                        <div class="form-group">
                                {!! Form::label('is_configurable', 'Use in Configurable Product?') !!}
                                {!! Form::select('is_configurable', $booleanOptions , null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                                {!! Form::label('is_filterable', 'Use in Filtering Product?') !!}
                                {!! Form::select('is_filterable', $booleanOptions , null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                    </div>
                </div>
            </fieldset>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{url('admin/attributes')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
          {!! Form::close() !!}
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