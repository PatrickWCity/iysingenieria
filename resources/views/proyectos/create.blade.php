@extends('layouts.app')

@section('content')
<div class="container mt-1 pt-1">
    <div class="formato-izquierda">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <h1 class="card-header" style="text-align: center;">
                                Crear Proyecto
                            </h1>
                            <div class="card-body">
                                {!! Form::open(['action' => 'ProyectoController@store', 'method' => 'POST', 'enctype' =>
                                'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{Form::label('nombre', 'Nombre')}}
                                    {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('descripcion', 'Descripcion')}}
                                    {{Form::textarea('descripcion', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Descripcion'])}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Estado de Proyecto') }}
                                    {{ Form::select('estado', $options , null, array('class'=>'form-control', 'placeholder'=>'Selecionar Estado')) }}
                                </div>
                                <div class="form-group">
                                    {{Form::file('imagen')}}
                                </div>
                                {{Form::submit('Crear', ['class'=>'btn btn-primary'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
    </div>
</div>
@endsection