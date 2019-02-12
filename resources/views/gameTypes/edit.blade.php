@extends('layouts.default')

@section('pageTitle', 'Bewerk speltype')

@section('contents')
    <form method="POST" action="/gameTypes/{{ $gameType->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" type="text" name="name" value="{{ $gameType->name }}" />
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description">{{ $gameType->description }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

<form method="POST" class="d-inline-block mt-1" action="/gameTypes/{{ $gameType->id }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    
    <button type="submit" class="btn btn-warning">Verwijderen</button>
</form>
@endsection