@extends('layouts.default')

@section('pageTitle', 'Nieuw spel')

@section('contents')
    <form method="POST" action="/games">
        {{ csrf_field() }}

      <input type="hidden" name="first_player_id" id="first_player_id" value="{{ auth()->id() }}" />
    	<div class="form-group">
    		<label for="gameType_id">Selecteer speltype</label>
    		<select required class="form-control" id="gameType_id" name="gameType_id">
    			@if ($gameTypes->count())
    				<option value="">-- Selecteer speltype --</option>
    			@else
    				<option value="">-- Geen speltypen beschikbaar --</option>
    			@endif
    			@foreach ($gameTypes as $type)
    				<option value="{{ $type->id }}">{{ $type->name }}</option>

    			@endforeach
    		</select>
    	</div>

    	<div class="form-group" id="playerTwoSelect">
    		<label for="second_player_id">Tegen wie?</label>
    		<select class="form-control" id="second_player_id" name="second_player_id">
    			<option value="">-- {{ $players->count() ? 'Selecteer speler 2' : 'Geen spelers beschikbaar' }} --</option>
    			@foreach ($players as $player)
    				<option value="{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</option>

    			@endforeach
    		</select>
    	</div>

        @include('partials/errors')

    	<button type="submit" class="btn btn-primary">Start spel</button>
    </form>
@endsection
