@extends('admin.layout')
@section('title','Product')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div id="accordion-role-permission" class="accordion accordion-bordered ">
                    @forelse ($roles as $role)
                        {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ], 'class' => 'm-b']) !!}

                        @if($role->name === 'Admin')
                            @include('admin.roles._permissions', ['title' => $role->name .' Permissions', 'options' => ['disabled'], 'showButton' => true])
                        @else
                            @include('admin.roles._permissions', ['title' => $role->name .' Permissions', 'model' => $role, 'showButton' => true])
                        @endif

                        {!! Form::close() !!}

                    @empty
                        <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection