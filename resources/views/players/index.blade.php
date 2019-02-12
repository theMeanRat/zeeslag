@extends('layouts.default')

@section('pageTitle', 'Spelers')

@section('contents')
	@if ($players->count())
	    <ul class="list-group">
	    @foreach ($players AS $player)
	        <li class="list-group-item"><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></li>
	    @endforeach
	    </ul>
	@else
		<p>Er zijn geen spelers beschikbaar.</p>
	@endif
	<p><a href="/players/create" class="btn btn-primary mt-3">Voeg een speler toe</a></p>
@endsection