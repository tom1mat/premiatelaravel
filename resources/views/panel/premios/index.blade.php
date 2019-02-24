@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Premios</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Premio</th>
                                        <th>Imagen</th>
                                        <th>Video</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($premios as $each)
                                        <tr>
                                            <td>{{ $each->id }}</td>
                                            <td>{{ $each->premio }}</td>
                                            <td><img width="100" src="{{ asset("storage/app/$each->imagen") }}"></td>
                                            <td>{{ $each->video }}</td>
                                            <td><a href="{{ route("premios.edit", $each->id) }}"><i class="fa fa-edit"></i></a></td>
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
