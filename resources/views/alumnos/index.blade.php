@extends('layout/template')

@section('title', 'Alumno | Escuela')

@section('content')

<main>
    <div class="container py-4">
        <h2>Listado alumnos</h2>

        <a href="{{url('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>

    </div>
</main>