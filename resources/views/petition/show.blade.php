@extends('layouts.application')

@section('content')

{{$petition->title}}

<p>
{{$petition->body}}
</p>

@endsection