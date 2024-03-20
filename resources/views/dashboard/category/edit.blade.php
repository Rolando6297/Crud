@extends('dashboard.layout')

@section('content')
@include('dashboard.fragment.errorsForm')
<h1>Actualizar category {{$category->title}}</h1>
@include("dashboard.fragment.errorsForm")
<form action="{{route('category.update', $category->id)}}" method="post" >
    @method("PUT")
    @include('dashboard.category.form')
</form>
@endsection