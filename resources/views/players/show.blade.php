@extends('layouts.default')

@section('pageTitle', 'Speler details')

@section('contents')
    <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
    <p>
    	@if ($player->isComputer)
    		Computer
    	@else
    		Mens
    	@endif
    </p>
    <a class="btn btn-primary" href="/players/{{ $player->id }}/edit">Bewerken</a>
@endsection