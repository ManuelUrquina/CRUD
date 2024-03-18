@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<div class="fondo ">
    <div class="row g-3">

        <div class="col-md-3 ">
            <x-adminlte-small-box title="{{ $vuelo }}" text="Vuelos" icon="fas fa-map text-dark" theme="success" url="/vuelo" url-text="Ver vuelos"/>
        </div>

    </div>
</div>

@stop

@section('css')
<style>
    .fondo {
        background-image: url("{{ asset('img/webb.png') }}");
        height: 100vh;
        /* background-size: cover;
        background-position: center; */
        /* background-repeat: no-repeat; */
    }
</style>

@endsection

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

