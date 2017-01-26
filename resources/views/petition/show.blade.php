@extends('layouts.app')

@section('content')

<h1>{{$petition->title}}</h1>

<p>
{{$petition->body}}
</p>

@endsection