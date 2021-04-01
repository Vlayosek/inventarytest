@extends('adminlte::page')

@section('title', 'Equipos Activos')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-12">
                            <a class="btn btn-success" href="{{ route('activeequipment.create') }}">
                                <i class="fas fa-plus">Crear</i>
                            </a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Equipos Activos</li>
                            </ol>
                        </div>
                </div>
            </div>
            @include('flash::message')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Lista de Equipos Activos') }}</h3>
                </div>

                <div class="card-body">
                    <table id="tblEquipos" class="table table-striped table-bordered table-hover">
                        <thead style="text-align: center">
                            <tr>
                                <th>ID</th>
                                <th>SO</th>
                                <th>Usuario Designado</th>
                                <th>Tipo</th>
                                <th>Mac</th>
                                <th>Ip</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                                @foreach ($equipos as $equipo)
                                <tr>
                                    <td>{{ $equipo->id }}</td>
                                    <td>{{ $equipo->sistema_operativo }}</td>
                                    <td>{{ $equipo->usuario_asignado }}</td>
                                    @if ($equipo->tipo == 'D')
                                    <td>Desktop</td>
                                    @else
                                    <td>Laptop</td>
                                    @endif
                                    <td>{{ $equipo->mac }}</td>
                                    <td>{{ $equipo->ip }}</td>
                                    <td>
                                        {{-- <a href="activeequipment/{{$equipo->id}}" class="btn btn-primary">Show</a> --}}
                                        <a class="btn btn-info" href="{{ route('activeequipment.show', $equipo->id ) }}" title="show">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_equipo_{{ $equipo->id }}">
                                            <i class="fa fa-ban"></i>
                                        </button> --}}

                                        @include('equipment.modal')
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
@stop

@section('css')

@stop
@section('js')
<script src="{{ asset('js/main.js') }}"></script>
<script>
$(document).ready(function() {
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
});
</script>
@stop
