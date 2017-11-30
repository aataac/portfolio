@extends('layouts.main') @section('content')
<div class="content-projet-create">
	<form class="" action="{{route('projets.store')}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="titre">Titre</label>
			<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Description">
		</div>
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</div>
@endsection