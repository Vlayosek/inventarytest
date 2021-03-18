@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    {{-- <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Usuarios</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active">Usuarios</li>
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
                            <a class="btn btn-info" href="{{ route('user.create') }}"><i class="fas fa-user-plus">Crear</i></a>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Usuarios</li>
                            </ol>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Lista de Usuarios') }}</h3>
                </div>

                <div class="card-body">

                    <table id="tblUser" class="table table-striped table-bordered table-hover">
                        <thead style="text-align: center">
                            <tr>
                                <th width="10px">Id</th>
                                <th>Nombres</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Fecha Ingreso</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->status == 'A')
                                    <td><span class="badge bg-success">Activo</span></td>
                                @else
                                    <td><span class="badge bg-danger">Inactivo</span></td>
                                @endif
                                <td>
                                    <?php
                                    $date = date_create($user->created_at);
                                    echo date_format($date, 'd-m-Y');
                                    ?>
                                </td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-danger">
                                        <i class="fas fa-user-slash"></i>
                                    </a>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#tblUser').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "language": {
            "emptyTable": "No hay información",
            "info": "_TOTAL_ Registros",
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
    // $('#tblUser').DataTable({
    //     "responsive": true,
    //     "serverside": true,
    //     "ajax": "{{ url('/user/filltable') }}",
    //     "columns":[
    //         {data: 'id'},
    //         {data: 'name'},
    //         {data: 'email'},
    //         {data: 'created_at'},
    //         {data: 'btn'}
    //     ]
    // });
});
</script>

@stop
