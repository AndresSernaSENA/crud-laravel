@extends('layout/template')

@section('title', 'Registrar Alumno | Escuela')

@section('content')

<main>
    <div class="container py-4">
        <h2>Registrar alumno</h2>

        <form action="{{url('alumnos')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{old('matricula')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-5 ">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{old('fecha')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="telefono" id="telefono" value="{{old('telefono')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Correo electronico</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                </div>
            </div>
        </form>
    </div>
</main>