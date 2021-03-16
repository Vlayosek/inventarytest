@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Usuarios</span>
                <span class="info-box-number">{{ $users }}</span>
              </div>

            </div>
        </div>


        <div class="col-12 col-sm-6 col-md-3"">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Areas</span>
                <span class="info-box-number">
                  {{ $areas }}
                </span>
              </div>

            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-linode"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Categorias</span>
                <span class="info-box-number">{{ $categories }}</span>
              </div>

            </div>

        </div>

        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Productos</span>
                <span class="info-box-number">{{ $products }}</span>
              </div>

            </div>

          </div>


    </div>
@stop
@section('js')
<script>
$(document).ready(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    Toast.fire({
        icon: 'success',
        title: 'Bienvenidos a InventaryApp',
    })
});
</script>
@stop
