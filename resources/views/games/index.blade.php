@extends('layouts.default')

@section('pageTitle', 'Spellen')

@section('contents')
	@if ($games->count())
	    <ul class="list-group">
	    @foreach ($games AS $game)
	        <li class="list-group-item {{ $game->completed ? 'bg-secondary' : '' }}">
	        	<form class="form-inline" method="POST" action="/games/{{ $game->id }}">
        			@csrf
        			@method('PATCH')
        			<div class="custom-control custom-checkbox {{ $game->completed ? 'is-complete' : '' }}">
			            <input onChange="this.form.submit();" type="checkbox" class="custom-control-input" name="completed" id="completed" {{ $game->completed ? 'checked' : '' }} autocomplete="off" />
			            <label for="completed" class="custom-control-label"><a href="/games/{{ $game->id }}">
			                {{ $game->firstPlayer->first_name }} {{ $game->firstPlayer->last_name }} speelt tegen 
				        	@if ( $game->secondPlayer !== NULL )
				        		{{ $game->secondPlayer->firstName }} {{ $game->secondPlayer->last_name }}
				        	@else
				        		de computer
				        	@endif
				        </a></label>
			        </div>
        		</form>
        	</li>
	    @endforeach
	    </ul>
	@else
		<p>Er zijn geen spellen gestart.</p>
	@endif
	<p><a href="/games/create" class="btn btn-primary mt-3">Start een nieuw spel</a></p>
@endsection