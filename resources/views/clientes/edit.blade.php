@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Creacion de Cliente
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre','nombre') !!}
                        {!! Form::text('nombre',$cliente->nombre,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('anexo','anexo') !!}
                        {!! Form::text('anexo',$cliente->anexo,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}

                    </div>
                    {!! Form::close() !!}

                </div>


            </div>
        </div>
    </div>

@endsection