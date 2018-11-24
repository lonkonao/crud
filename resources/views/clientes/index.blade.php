@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado Clientes</div>

                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Anexo</th>
                                <th colspan="2" >Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente as $clientes)
                            <tr>
                                <td>{{$clientes->nombre}}</td>
                                <td>{{$clientes->anexo}}</td>
                                <td>editar</td>
                                <td>eliminar</td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
