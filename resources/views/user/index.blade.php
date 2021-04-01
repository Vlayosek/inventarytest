@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_user">
                                <i class="fas fa-user-plus">Crear</i>
                            </button>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Usuarios</li>
                            </ol>
                        </div>
                </div>
            </div>
            @include('flash::message')
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
                                <?php
                                $date = date_create($user->created_at);
                                echo '<td>'.date_format($date, 'd-m-Y').'</td>';
                                ?>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_user_{{ $user->id }}">
                                        <i class="fas fa-user-edit"></i>
                                    </button>

                                    @if($user->status=='A')
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_user_{{ $user->id }}">
                                            <i class="fa fa-ban"></i>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-success" alt="Darlo de alta" data-toggle="modal" data-target="#delete_user_{{ $user->id }}">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    @endif

                                    @include('user.modal')
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
