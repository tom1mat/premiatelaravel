@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Competencias</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Competencia</th>
                                        <th>Local</th>
                                        <th>Visitante</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($competencias as $each)
                                        <tr>
                                            <td>{{ $each->id }}</td>
                                            <td>{{ $each->competencia }}</td>
                                            <td>{{ $each->flocal->competidor }}</td>
                                            <td>{{ $each->fvisitante->competidor }}</td>
                                            <td><a href="{{ route("competencias.edit", $each->id) }}"><i class="fa fa-edit"></i></a></td>
                                            <th><a href="{{ route("competencias.destroy", $each->id) }}"><i class="fa fa-trash"></i></a></th>
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
