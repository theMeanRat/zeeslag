@extends('layouts.default')

@section('pageTitle', 'Speltypen')

@section('contents')
	@if ($gameTypes->count())
	    <ul class="list-group">
	    @foreach ($gameTypes AS $type)
	        <li class="list-group-item"><a href="/gameTypes/{{ $type->id }}">{{ $type->name }}</a></li>
	    @endforeach
	    </ul>
	@else
		<p>Er zijn geen speltypen beschikbaar.</p>
	@endif
	<p><a href="/gameTypes/create" class="btn btn-primary mt-3">Voeg een speltype toe</a></p>
@endsection