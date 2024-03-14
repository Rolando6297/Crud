<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('layout.master')
@section('content')

@include('fragmentos.subview')
{{$name}}
{{-- $age --}}

@include('fragmentos.subview')
@if($name == 'rodlando')
es true {{$name}} 
@elseif($name == 'Rolando')
es mayuscula {{$name}}
@else
es false {{$name}}
@endif


@foreach ($array as $item)
    <h1>{{$item}}</h1>
@endforeach
@forelse ($array as $item)
<h1>{{$item}}</h1>
@empty
    <h1>No hay registros</h1>

@endforelse 

@endsection



</body>
</html>