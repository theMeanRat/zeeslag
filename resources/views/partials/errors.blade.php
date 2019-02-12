@if ($errors->any())
    <div class="card text-white bg-danger mb-3">
        <div class="card-header">Woops...</div>
        <div class="card-body">
            @foreach ($errors->all() as $err)
                <p class="card-text">{{ $err }}</p>
            @endforeach
        </div>
    </div>
@endif