@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_rol">
                                <i class="fas fa-plus">Crear</i>
                            </button>
                            {{-- <a class="btn btn-success" href="{{ route('rol.create') }}"><i class="fas fa-plus">Crear</i></a> --}}
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div>
                </div>
            </div>
            @include('flash::message')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Lista de Roles') }}</h3>
                </div>

                <div class="card-body">

                    <table id="tblRoles" class="table table-striped table-bordered table-hover">
                        <thead style="text-align: center">
                            <tr>
                                <th width="10px">Id</th>
                                <th>Descripción</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($roles as $rol)
                            <tr>
                                <td>{{ $rol->id }}</td>
                                <td>{{ $rol->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_rol_{{ $rol->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_rol_{{ $rol->id }}">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                    @include('roles.modal')
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
<script src="{{ asset('js/main.js') }}"></script>>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stop
