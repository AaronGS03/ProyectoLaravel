@extends('layouts.app')

@section('template_title')
    {{ $character->name ?? "{{ __('Show') Character" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Character</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('characters.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $character->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apodos:</strong>
                            {{ $character->apodos }}
                        </div>
                        <div class="form-group">
                            <strong>Franquicia:</strong>
                            {{ $character->franquicia }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $character->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $character->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $character->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Primera Aparicion:</strong>
                            {{ $character->primera_aparicion }}
                        </div>
                        <div class="form-group">
                            <strong>Rating Oficial:</strong>
                            {{ $character->rating_oficial }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
