@extends('layouts.default')

@section('pageTitle', 'Nieuwe speler')

@section('contents')
    <form method="POST" action="/players">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Voornaam</label>
            <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" />
        </div>
        
        <div class="form-group">
            <label for="description">Achternaam</label>
            <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" />
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="is_computer" name="is_computer" value="1">
            <label class="form-check-label" for="is_computer">Speler is een computer</label>
        </div>
        
        @include('partials/errors')
        
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection