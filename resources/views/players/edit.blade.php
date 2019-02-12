@extends('layouts.default')

@section('pageTitle', 'Bewerk speler')

@section('contents')
    <form method="POST" action="/players/{{ $player->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        
        <div class="form-group">
            <label for="first_name">Voornaam</label>
            <input class="form-control" id="first_name" type="text" name="first_name" value="{{ $player->first_name }}" />
        </div>
        
        <div class="form-group">
            <label for="last_name">Achternaam</label>
            <input class="form-control" name="last_name" type="text" id="last_name" value="{{ $player->last_name }}" />
        </div>

        <div class="form-check">
            <input {{ $player->isComputer ? "checked" : "" }} type="checkbox" class="form-check-input" id="is_computer" name="is_computer" value="1">
            <label class="form-check-label" for="is_computer">Speler is een computer</label>
        </div>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

<form method="POST" class="d-inline-block mt-1" action="/players/{{ $player->id }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    
    <button type="submit" class="btn btn-warning">Verwijderen</button>
</form>
@endsection