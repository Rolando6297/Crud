@extends('dashboard.layout')

@section('content')
@include('dashboard.fragment.errorsForm')
<h1>Create</h1>
<form action="{{route('category.store')}}" method="post">
    @include('dashboard.category.form')
</form>
@endsection