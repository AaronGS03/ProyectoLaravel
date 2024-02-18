@extends('layouts.app')

@section('template_title')
    Ratings
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Personajes ordenados por valoración de "Divertido"</h3>
            <ul>
                @foreach ($charactersByFunRating as $character)
                    <li>{{ $character->nombre }} - {{ $character-->divertido ? $character->divertido : 'No identificado' }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Personajes ordenados por valoración de "No gusta"</h3>
            <ul>
                @foreach ($charactersByNoLikeRating as $character)
                    <li>{{ $character->nombre }} - {{ $character->no_gusta ? $character->no_gusta : 'No identificado' }}</li>
                @endforeach
            </ul>
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
                                  {{ __('Create New') }}
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
