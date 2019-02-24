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
                            <input type="text" required name="premio" placeholder="Nombre del sorteo" value="{{ $premio->premio }}" class="form-control">
                            <input type="file" name="imagen" accept="image/x-png,image/gif,image/jpeg" class="form-control">
                            <input type="text" name="video" placeholder="Video URL" value="{{ $premio->video }}" class="form-control">
                            <button class="btn btn-primary">Editar sorteo</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
