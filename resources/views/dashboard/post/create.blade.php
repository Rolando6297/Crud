@extends('dashboard.layout')

@section('content')
@include('dashboard.fragment.errorsForm')
<h1>Create</h1>
<form action="{{route('post.store')}}" method="post">
    @include('dashboard.post.form')
</form>
@endsection