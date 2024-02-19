@extends('layouts.app')

@section('template_title')
    Character
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personajes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('characters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                    @php
            @endphp
          
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
										<th>Nombre</th>
										<th>Apodos</th>
										<th>Franquicia</th>
										<th>Primera Aparicion</th>
										<th>Rating Oficial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($characters as $character)
                                        <tr>
                                            <td style="background-color: {{ $character->color }};">
                                                <img src="{{ $character->logo }}" alt="{{ $character->nombre }}" style="width: 50px; height: auto;">
                                            </td>
                                            
											<td>{{ $character->nombre }}</td>
											<td>{{ $character->apodos }}</td>
											<td>{{ $character->franquicia }}</td>
											<td>{{ $character->primera_aparicion }}</td>
											<td>{{ $character->rating_oficial }}</td>

                                            <td>
                                                <form action="{{ route('characters.destroy',$character->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('characters.show',$character->id) }}" style="color:white; border-color:{{$character->color}}; background-color: {{$character->color}}"><i class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('characters.edit',$character->id) }}" style="color:white; border-color:{{$character->color}}; background-color: {{$character->color}}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="color:white; border-color:{{$character->color}}; background-color: {{$character->color}}"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
