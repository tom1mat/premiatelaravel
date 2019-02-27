@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Editar sorteo</h1>
                            {!! Form::open(['route' => ['competencias.update', $competencia->id], 'method'=>'put']) !!}
                                {{ Form::select('local', $competidores, $competencia->local) }}
                                {{ Form::select('visitante', $competidores, $competencia->visitante) }}
                                <input type="text" name="competencia" value="{{ $competencia->competencia }}">
                                <button class="btn btn-primary">Editar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
