@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Area</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('area.index') }}">Area</a></li>
                <li class="breadcrumb-item active">Editar</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Editar Areas') }}</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('area.update') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" value="{{ $area->name }}" placeholder="Ingrese Area..." required onfocus="">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-archive"></i></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
<style>
    input:focus {
        background-color: grey;
    }
</style>
@stop
@section('js')
<script>
$(document).ready(function() {
});
</script>
@stop
