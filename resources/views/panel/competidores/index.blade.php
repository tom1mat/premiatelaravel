@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Competidores</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Competidor</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($competidores as $each)
                                        <tr>
                                            <td>{{ $each->id }}</td>
                                            <td>{{ $each->competidor }}</td>
                                            <td><a href="{{ route("competidores.edit", $each->id) }}"><i class="fa fa-edit"></i></a></td>
                                            <th><a href="{{ route("competidores.destroy", $each->id) }}"><i class="fa fa-trash"></i></a></th>
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
