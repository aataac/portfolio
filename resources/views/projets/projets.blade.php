@extends('layouts.main') @section('content')

<div class="container text-center">
	<label for="titre">
		<h1>{{$projets->titre}}</h1>
	</label>
	<p>{{$projets->categorie}}</p>
	<p><img src="{{ $projets->getMedia()[0]->getUrl() }}" class="img-page-projet" alt="{{ $projets->titre }}"></p>
	<p>
		<label for="description">{{$projets->description}}</label>
	</p>

</div>
@endsection