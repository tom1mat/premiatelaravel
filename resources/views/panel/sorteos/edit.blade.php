@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Editar sorteo</h1>
                            {!! Form::open(['route' => ['sorteos.update', $sorteo->id], 'method'=>'put']) !!}
                                <input type="text" name="sorteo" value="{{ $sorteo->sorteo }}" class="form-control">
                                <input type="date" name="fecha" value="{{ $sorteo->fecha }}" class="form-control">
                                <button class="btn btn-primary">Editar sorteo</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
