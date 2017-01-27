@extends('layouts.app')

@section('content')

<h1>{{$petition->title}}</h1>

<p>
{{$petition->body}}
</p>

<form class="form-horizontal" role="form" method="POST" action="{{ URL::route('petition.sign', $petition->id) }}">
  {{ method_field('PUT') }}

  <div class="form-group">
    <label for="name" class="control-label">Name</label>

    <input id="name" type="text" class="form-control" name="name" required autofocus>
  </div>

  <div class="form-group">
    <label for="email" class="control-label">Name</label>

    <input id="email" type="email" class="form-control" name="email" required autofocus>
  </div>
  
  <div class="form-group">
    <label for="phone" class="control-label">Phone</label>

    <input id="phone" type="telephone" class="form-control" name="phone" required autofocus>
  </div>

  <button type="submit" class="btn btn-primary" value='Sumbit'>Sumbit</button>
    
  </div>

</form>
@endsection