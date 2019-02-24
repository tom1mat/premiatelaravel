@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Crear premio</h1>
                            {!! Form::open(
                                ['route' => 'premios.store',
                                 'method'=>'post',
                                 'enctype' => 'multipart/form-data'
                                ])
                            !!}
                                <input type="text" name="premio" placeholder="Nombre del premio" class="form-control">
                                <input type="file" name="imagen" accept="image/x-png,image/gif,image/jpeg" class="form-control">
                                <input type="text" name="video" placeholder="Video URL" class="form-control">
                                <button class="btn btn-primary">Crear</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
