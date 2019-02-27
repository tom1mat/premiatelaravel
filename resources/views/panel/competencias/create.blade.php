@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Crear competencia</h1>
                            {!! Form::open(['route' => 'competencias.store']) !!}
                            {{ Form::select('local', $competidores) }}
                            {{ Form::select('visitante', $competidores) }}
                                <input type="text" name="competencia">
                                <button class="btn btn-primary">Crear</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
