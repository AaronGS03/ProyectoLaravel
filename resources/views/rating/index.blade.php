@extends('layouts.app')

@section('template_title')
    Ratings
@endsection


@section('content')
<div class="container" style="padding-bottom:100px">
    <div class="row">
        <div class="col-md-6">
            <div class="card w-100 h-100" style="width: 18rem;">
                <div class="card-header">
                    Divertidos de jugar
                </div>
                <ul class="list-group list-group-flush">
                    @php
                        $halfCharacters = ceil($charactersByFunRating->count() / 2);
                        $firstHalf = $charactersByFunRating->take($halfCharacters);
                        $secondHalf = $charactersByFunRating->skip($halfCharacters);
                    @endphp
                    <div class="row">
                        <div class="col">
                            @foreach ($firstHalf as $character)
                                <li class="list-group-item">
                                    <img src="{{$character->logo}}" style="width:10%">
                                    {{ $character->nombre }} - {{ $character->ratings->first() ? $character->ratings->first()->divertido : 'No definido' }}
                                </li>
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach ($secondHalf as $character)
                                <li class="list-group-item">
                                    <img src="{{$character->logo}}" style="width:10%">
                                    {{ $character->nombre }} - {{ $character->ratings->first() ? $character->ratings->first()->divertido : 'No definido' }}
                                </li>
                            @endforeach
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 h-100" style="width: 18rem;">
                <div class="card-header">
                    Como contrincantes
                </div>
                <ul class="list-group list-group-flush">
                    @php
                        $halfCharacters = ceil($charactersByNoLikeRating->count() / 2);
                        $firstHalf = $charactersByNoLikeRating->take($halfCharacters);
                        $secondHalf = $charactersByNoLikeRating->skip($halfCharacters);
                    @endphp
                    <div class="row">
                        <div class="col">
                            @foreach ($firstHalf as $character)
                                <li class="list-group-item">
                                    <img src="{{$character->logo}}" style="width:10%">
                                    {{ $character->nombre }} - {{ $character->ratings->first() ? $character->ratings->first()->no_gusta : 'No definido' }}
                                </li>
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach ($secondHalf as $character)
                                <li class="list-group-item">
                                    <img src="{{$character->logo}}" style="width:10%">
                                    {{ $character->nombre }} - {{ $character->ratings->first() ? $character->ratings->first()->no_gusta : 'No definido' }}
                                </li>
                            @endforeach
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ratings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
                                        
										<th>Personaje</th>
										<th>Divertido</th>
										<th>No Gusta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ratings as $rating)
                                        <tr>
                                        <td><img src="{{$rating->character->logo}}" style="width: 10%; background-color: {{$rating->color}}" alt=""></td>
                                            
											<td>{{ $rating->character->nombre }}</td>
											<td>{{ $rating->divertido }}</td>
											<td>{{ $rating->no_gusta }}</td>

                                            <td>
                                                <form action="{{ route('ratings.destroy',$rating->id) }}" method="POST">
                                                    <a class="btn btn-sm btn "style="color:white; background-color: {{ $rating->character->color ? $rating->character->color : '#CCCCCC'}}" href="{{ route('characters.show',$rating->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn"style="color: white; background-color: {{ $rating->character->color ? $rating->character->color : '#CCCCCC'}}" href="{{ route('ratings.edit',$rating->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="color: white;background-color: {{ $rating->character->color ? $rating->character->color : '#CCCCCC'}}" type="submit" class="btn btn btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
