@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There are some problems with your input.<br/><br/>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    {{-- <div class="alert alert-danger">{{session('error')}}</div> --}}
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Warning!</h4>
        {{session('error')}}.
      </div>
@endif