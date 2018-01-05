{{-- resources/views/admin/dashboard.blade.php --}} @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1>
	<small>
		<a href="{{url()->previous()}}">Back</a>
	</small> Dashboard
	<small>Projets panel</small>
</h1>
<ol class="breadcrumb">
	<li>
		<a href="#">
			<i class="fa fa-dashboard"></i> Home</a>
	</li>
	<li class="active">Projets</li>

</ol>
@stop @section('content')

<div>
	<a href="{{route('admin_projets_create')}}">Insérer un nouveau projet</a>
</div>

<div class="row">

	@foreach($projets as $projet)

	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{{ $projet->getMedia()[0]->getUrl() }}" alt="{{ $projet->titre }}">
			<div class="caption">
				<h3>{{ $projet->titre }}</h3>
				<p>{{ $projet->description }}</p>
				<p>
					<a href="{{ route('projets', ['id'=> $projet->id])}}" class="btn btn-primary" role="button" target="_blank">View</a>
					<a href="{{ route('admin_projets_edit', ['id'=> $projet->id])}}" class="btn btn-default" role="button">Edit</a>
				</p>
			</div>
		</div>
	</div>
	@endforeach
</div>


@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js') @stop