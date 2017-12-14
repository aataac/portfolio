@extends('layouts.main') @section('content')

<div class="container text-center">
	<label for="titre">
		<h1>{{$projets->titre}}</h1>
	</label>
	<p>
		<label for="description">{{$projets->description}}</label>
	</p>
</div>
@endsection