@extends('layouts.main')

<div class="content">
	<form class="form-control" action="{{route('projets.store')}}" method="post">
		{{ csrf_field() }}

	</form>
</div>