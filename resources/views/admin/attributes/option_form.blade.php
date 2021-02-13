@include('admin.partials.flash', ['$errors' => $errors])
<div class="tile">
            
    <div class="tile-body">
        @if (!empty($attributeOption))
        {!! Form::model($attributeOption, ['url' => ['admin/attributes/options', $attributeOption->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('id') !!}
        @else
            {!! Form::open(['url' => ['admin/attributes/options', $attribute->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @endif
        {!! Form::hidden('attribute_id', $attribute->id) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="tile-footer">
      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{url('admin/attributes')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Back</a>
    </div>
</div>
{!! Form::close() !!}
  