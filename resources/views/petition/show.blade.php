@extends('layouts.app')

@section('content')

<div class='page-header'>
  <h1>{{$petition->title}}</h1>
</div>

<div class='petition-body'>
  {{$petition->body}}
</div>

<div class='col-md-6 col-md-offset-3'>
  <div class='panel panel-primary'>
    <div class='panel-heading'>
      Voice your support!
    </div>
  <div class='panel-body'>
    @include('petition._signature_form')
  </div>
</div>
@endsection