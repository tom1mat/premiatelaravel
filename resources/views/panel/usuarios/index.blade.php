@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Usuarios</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Pais</th>
                                        <th>Tipo</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $eachUser)
                                        <tr>
                                            <td>{{ $eachUser->nombre }}</td>
                                            <td>{{ $eachUser->apellido }}</td>
                                            <td>{{ $eachUser->pais }}</td>
                                            <td>{{ $eachUser->tipo }}</td>
                                            <td>{{ $eachUser->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
