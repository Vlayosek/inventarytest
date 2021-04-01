@extends('adminlte::page')

@section('title', 'Articulo')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12">
                        <a class="btn btn-info" href="{{ route('activeequipment.index') }}" disabled>Regresar</a>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}" disabled>Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('activeequipment.index') }}" disabled>Equipos</a></li>
                            <li class="breadcrumb-item active">Crear</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#cpu" data-toggle="tab">CPU</a></li>
                        <li class="nav-item"><a class="nav-link" href="#monitor" data-toggle="tab">Monitor</a></li>
                        <li class="nav-item"><a class="nav-link" href="#extension" data-toggle="tab">Extensiones</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="cpu">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <select class="form-control select2bs4" id="area_id" name="area_id" style="width: 100%;" >
                                                <option value="">Seleccione una opcion...</option>
                                                {{-- @if ($areas->count())
                                                    @foreach($areas as $varea)
                                                        <option value="{{ $varea->id }}" disabled>{{ $varea->name }}</option>
                                                    @endforeach
                                                @endif --}}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Login Windows</label>
                                            <input type="text" name="login_windows" id="login_windows" class="form-control" value="{{ $activeEquipment->login_windows }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Equipo Host</label>
                                            <input type="text" name="equipo_host" id="equipo_host" class="form-control" value="{{ $activeEquipment->equipo_host }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Usuario Asignado</label>
                                            <input type="text" name="usuario_asignado" id="usuario_asignado" class="form-control" value="{{ $activeEquipment->usuario_asignado }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <select name="tipo" id="tipo" class="form-control">
                                                <option value="">Seleccione una opcion...</option>
                                                <option value="D">Desktop</option>
                                                <option value="L">Laptop</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Modelo</label>
                                            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $activeEquipment->modelo }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Marca</label>
                                            <input type="text" name="marca" id="marca" class="form-control" value="{{ $activeEquipment->marca }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Serie</label>
                                            <input type="text" name="serie" id="serie" class="form-control" value="{{ $activeEquipment->serie }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">No Producto</label>
                                            <input type="text" name="nro_producto" id="nro_producto" class="form-control" value="{{ $activeEquipment->nro_producto }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Ram</label>
                                            <input type="text" name="ram" id="ram" class="form-control" value="{{ $activeEquipment->ram }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Disco Duro</label>
                                            <input type="text" name="disco_duro" id="disco_duro" class="form-control" value="{{ $activeEquipment->disco_duro }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Procesador</label>
                                            <input type="text" name="procesador" id="procesador" class="form-control" value="{{ $activeEquipment->procesador }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sistema Operativo</label>
                                            <input type="text" name="sistema_operativo" id="sistema_operativo" class="form-control" value="{{ $activeEquipment->sistema_operativo }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>IP</label>
                                            <input type="text" name="ip" id="ip" class="form-control" value="{{ $activeEquipment->ip }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">MAC</label>
                                            <input type="text" name="mac" id="mac" class="form-control" value="{{ $activeEquipment->mac }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="monitor">
                            <div class="row">
                            </div>
                        </div>
                        <div class="tab-pane" id="extension">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop
@section('js')
<script src="{{ asset('js/main.js') }}" disabled></script>
<script>
$(document).ready(function() {
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
});
</script>
@stop
