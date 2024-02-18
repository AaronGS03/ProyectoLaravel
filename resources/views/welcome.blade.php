@extends('layouts.app')
<?php

// Archivo: app/helpers.php

if (!function_exists('getContrastColor')) {
    /**
     * Obtener el color de contraste para el texto basado en el color de fondo.
     *
     * @param string $bgColor El color de fondo en formato hexadecimal (#RRGGBB).
     * @return string El color de texto adecuado (negro o blanco).
     */
    function getContrastColor($bgColor)
    {
        // Convertir el color de fondo a RGB
        list($r, $g, $b) = sscanf($bgColor, "#%02x%02x%02x");

        // Calcular el luminosidad relativa
        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;

        // Retornar el color de texto adecuado basado en la luminosidad relativa
        
        return $luminance > 0.5 ? '#000000' : '#ffffff';
    }
}
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">{{ __('Tier list oficial') }}</div>

                <div class="card-body" style="background-color:lightgrey">
                    <div class="row">
                        @foreach($characters as $character)
                        <div class="col-md-4 mb-4">
                            <a href="{{ route('characters.show',$character->id) }}" style="text-decoration: none">
                            <div class="card border" style="background-color: {{ $character->color ? $character->color : '#CCCCCC'}}">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ $character->logo }}" alt="{{ $character->nombre }}" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title" style="color: {{ getContrastColor($character->color? $character->color : '#CCCCCC') }}">{{ $character->nombre }}</h5>
                                            <p class="card-text" style="color: {{ getContrastColor($character->color? $character->color : '#CCCCCC') }}">Rating: {{ $character->rating_oficial }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
