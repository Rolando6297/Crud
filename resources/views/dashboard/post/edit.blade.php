@extends('dashboard.layout')

@section('content')
@include('dashboard.fragment.errorsForm')
<h1>Actualizar Post {{$post->title}}</h1>
@include("dashboard.fragment.errorsForm")
<form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
    @method("PUT")
    @include('dashboard.post.form' , ["task"=>"edit"])
</form>
@endsection