@extends('layouts.default')

@section('pageTitle', 'Speltype details')

@section('contents')
    <h1>{{ $gameType->name }}</h1>
    <p>{{ $gameType->description }}</p>
    <a class="btn btn-primary" href="/gameTypes/{{ $gameType->id }}/edit">Bewerken</a>
@endsection