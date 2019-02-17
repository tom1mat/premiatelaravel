@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Editar premio</h1>
                            {!! Form::open(
                                ['route' => ['premios.update', $premio->id],
                                 'method'=>'put',
                                 'enctype' => 'multipart/form-data'
                                ])
                            !!}
                                <input type="text" name="premio" value="{{ $premio->premio }}" class="form-control">
                                <input type="date" name="imagen" value="{{ $sorteo->fecha }}" class="form-control">
                                <button class="btn btn-primary">Editar sorteo</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
