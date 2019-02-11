{{--<html xmlns="http://www.w3.org/1999/xhtml">--}}
    {{--<head>--}}
        {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="container">--}}
            {{--<h1>Empleados</h1>--}}
            {{--<div class="col-xs-6 offset-3">--}}
                {{--<ul>--}}
                    {{--@foreach($empleados as $empleado)--}}
                        {{--<li>{{$empleado->apellido}}, {{$empleado->nombre}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Empleado</h1>
        <div class="col-sm-8 offset-2">
            <form action="{{route('empleados.store')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" id="apellido">
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input class="form-control" type="text" name="documento" id="documento">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection