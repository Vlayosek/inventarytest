@extends('adminlte::page')

@section('title', 'Employee')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_employee">
                                <i class="fas fa-plus">Crear</i>
                            </button>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ol>
                        </div>
                </div>
            </div>
            @include('flash::message')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Lista de Areas') }}</h3>
                </div>

                <div class="card-body">
                    <table id="tblAreas" class="table table-striped table-bordered table-hover">
                        <thead style="text-align: center">
                            <tr>
                                <th width="10px">Id</th>
                                <th>Nombres</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                                {{-- @forelse ($areas as $area)
                                <tr>
                                    <td>{{ $area->id }}</td>
                                    <td>{{ $area->name }}</td>
                                    @if ($area->status == 'A')
                                        <td><span class="badge badge-pill badge-success p-2">Activo</span></td>
                                    @else
                                        <td><span class="badge badge-pill badge-danger p-2">Inactivo</span></td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_area_{{ $area->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        @if($area->status=='A')
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_area_{{ $area->id }}">
                                            <i class="fa fa-ban"></i>
                                        </button>
                                        @else
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#delete_area_{{ $area->id }}">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        @endif
                                        @include('areas.modal')
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No hay datos a mostrar</td>
                                </tr>
                                @endforelse --}}
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
