@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8" >
            @php
            // Función para determinar el color del texto basado en el color de fondo
            function getContrastColor($hexColor) {
            // Convertir el color hexadecimal a RGB
            $r = hexdec(substr($hexColor, 1, 2));
            $g = hexdec(substr($hexColor, 3, 2));
            $b = hexdec(substr($hexColor, 5, 2));

            // Calcular el brillo relativo
            $brightness = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;

            // Devolver el color del texto en función del brillo relativo
            return $brightness > 155 ? '#000000' : '#ffffff'; // Negro para fondos claros, blanco para fondos oscuros
            }
            @endphp
            <div class="card">
                <div class="card-header"
                    style="background-color: {{ $character->color ? $character->color : '#CCCCCC' }}; color: {{ getContrastColor($character->color ? $character->color : '#CCCCCC') }}">
                    {{ $character->nombre }}

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($character->imagen) }}" alt="{{ $character->nombre }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Apodos:</strong> {{ $character->apodos }}</p>
                            <p><strong>Franquicia:</strong> {{ $character->franquicia }}</p>
                            <p><strong>Descripción:</strong> {{ $character->descripcion }}</p>
                            <p><strong>Primera aparición:</strong> {{ $character->primera_aparicion }}</p>
                            <p><strong>Rating oficial:</strong> {{ $character->rating_oficial }}</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary"
                style="background-color: {{ $character->color ? $character->color : '#CCCCCC' }}; color: {{ getContrastColor($character->color ? $character->color : '#CCCCCC') }}"
                    href="{{ url()->previous() }}"> {{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection