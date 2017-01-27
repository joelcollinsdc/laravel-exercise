@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Thank You</h1>
  <p class="lead">{{$petition->thankyou}}</p>
</div>

@endsection