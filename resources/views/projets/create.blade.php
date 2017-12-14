@extends('layouts.main') @section('content')
<div class="content-projet">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class="" action="{{route('projets.store')}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="titre">Titre</label>
			<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre') ? old('titre') : '' }}">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{old('description') ? old('description') : '' }}">
		</div>
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</div>
@endsection