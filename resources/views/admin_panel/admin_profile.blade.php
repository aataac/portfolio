{{-- resources/views/admin/dashboard.blade.php --}} @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1><small><a href="{{url()->previous()}}">Back</a></small> Dashboard <small>Profile page</small></h1>
<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
		
      </ol>
@stop @section('content')
@if(!empty($status))
<div class="alert alert-info" role="alert">{{$status}}</div>
@endif

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile information</div>
 
                <div class="panel-body">
                123
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js')
@stop