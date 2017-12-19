{{-- resources/views/admin/dashboard.blade.php --}} @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1>Dashboard <small>Projets panel</small></h1>
<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Projets</li>
		
      </ol>
@stop @section('content')

			<div><a href="{{route('admin_projets_create')}}">Insérer un nouveau projet</a></div>


@foreach($projets as $projet)
			<div class="col-md-3">
				<h2>
					<a href="{{ route('projets', ['id'=> $projet->id])}}">{{ $projet->titre }}</a>
					<a href="{{ route('admin_projets_edit', ['id'=> $projet->id])}}">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
				</h2>
				<p>{{ $projet->description }}</p>
			</div>
			@endforeach

@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js')
@stop