@extends('layouts.default')

@section('pageTitle', 'Nieuw speltype')

@section('contents')
    <form method="POST" action="/gameTypes">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Name</label>
            <input required class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" type="text" name="name" value="{{ old('name') }}" />
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea required class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
        </div>
        
        @include('partials/errors')

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection