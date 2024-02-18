@extends('layouts.app')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Datos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ratings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group"style="background-color: {{ $character->color ? $character->color : '#CCCCCC'}}">
                            <strong>Character Id:</strong>
                            {{ $rating->character_id }}
                        </div>
                        <div class="form-group"style="background-color: {{ $character->color ? $character->color : '#CCCCCC'}}">
                            <strong>Divertido:</strong>
                            {{ $rating->divertido }}
                        </div>
                        <div class="form-group"style="background-color: {{ $character->color ? $character->color : '#CCCCCC'}}">
                            <strong>No Gusta:</strong>
                            {{ $rating->no_gusta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
