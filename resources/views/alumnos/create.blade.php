@extends('layout/template')

@section('title', 'Alumno | Escuela')

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
        </form>
    </div>
</main>