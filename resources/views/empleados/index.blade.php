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
        <h1>Empleados</h1>
        <div class="col-xs-6 offset-3">
            <ul>
                @foreach($empleados as $empleado)
                    <li>{{$empleado->apellido}}, {{$empleado->nombre}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection