@extends('layouts.home')

@section('content')
    <section class="container">
        <div class="page-header">
            <a href="{{ route("employees.index") }}" class="btn btn-primary btn-sm pull-right">Atrás</a>

            <h3>Empleado N° {{ $employee->id }}</h3>
        </div>

        <ul>
            <li>Nombre: <b>{{ $employee->name }}</b></li>
            <li>Email: <b>{{ $employee->email }}</b></li>
            <li>Teléfono: <b>{{ $employee->phone}}</b></li>
            <li>Dirección: <b>{{ $employee->address }}</b></li>
            <li>Cargo: <b>{{ $employee->position }}</b></li>
            <li>Salario: <b>$ {{ $employee->salary}}</b></li>
            <li>Habilidades: <b>{{ $employee->skills }}</b></li>
        </ul>
    </section>

@endsection