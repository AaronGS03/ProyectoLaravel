@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
            @foreach ($characters as $character)
                <div class="col-md-6 mb-4">
                    <div class="card horizontal-card">
                        <div class="card-img">
                            <img src="{{ $character->logo }}" class="img-fluid" alt="{{ $character->nombre }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $character->nombre }}</h5>
                            <p class="card-text">Rating: {{ $character->rating_oficial }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection
