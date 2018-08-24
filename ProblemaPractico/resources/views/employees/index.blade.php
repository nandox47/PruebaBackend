@extends('layouts.home')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-xs-6">
                <h3>Empleados</h3>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-7">
                </div>
                <div class="col-sm-3">
                    <div class="form-line">
                        <input type="text"
                               value="{{ (isset($emailSearch) && $emailSearch != "") ? $emailSearch : null }}"
                               placeholder="Buscar correo..." class="form-control" id="txt_email">
                    </div>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="btn btn-primary" id="btnSearch">Buscar</a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Puesto</th>
                    <th>Salario($)</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td class="text-center">
                            <a href="{{ route("employees.show", $employee->id) }}">
                                <span class="glyphicon glyphicon-list" aria-hidden="true" title="Ver"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#btnSearch').on('click', function () {
                var email = $('#txt_email').val();

                location.href = "{{ route('employees.index') }}?email=" + email;
            });
        });
    </script>
@endsection