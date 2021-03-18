@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')
    {{-- <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Area</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active">Area</li>
            </ol>
        </div>
    </div> --}}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-12">
                            <a class="btn btn-info" href="{{ route('article.create') }}">Crear</a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Articulos</li>
                            </ol>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Lista de Articulos') }}</h3>
                </div>

                <div class="card-body">
                    <table id="tblArticles" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($areas as $area)
                            <tr>
                                <td>{{ $area->id }}</td>
                                <td>{{ $area->name }}</td>
                                <td>{{ $area->status }}</td>
                                <td>
                                    <a href="{{ route('area.edit', $area->id) }}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                    </a>
                                    <a href="{{ route('area.destroy',$area->id) }}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove"></span> Anular
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
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
<script>
$(document).ready(function() {
    $('#tblArticles').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "language": {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
            "infoFiltered": "(Filtrado de _MAX_ total Registros)",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },

    });
});
</script>
@stop
