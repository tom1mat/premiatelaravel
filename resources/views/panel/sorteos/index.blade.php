@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Sorteos</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Sorteo</th>
                                        <th>Fecha</th>
                                        <th>Edit</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sorteos as $each)
                                        <tr>
                                            <td>{{ $each->id }}</td>
                                            <td>{{ $each->sorteo }}</td>
                                            <td>{{ $each->fecha }}</td>
                                            <td><a href="{{ route("sorteos.edit", $each->id) }}"><i class="fa fa-edit"></i></a></td>
                                            <th><a href="{{ route("sorteos.destroy", $each->id) }}"><i class="fa fa-trash"></i></a></th>
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
