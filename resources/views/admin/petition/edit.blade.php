@extends('layouts.app')

@section('content')
<div class="container">
  @include('messages')

    <h1>Edit Petition</h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/petition', $petition->id) }}" enctype="multipart/form-data">
      {{ method_field('PATCH') }}
      <!-- TODO {{ csrf_field() }} -->

      <input type="hidden" name="id" value="{{$petition->id}}"/>
      
      @include('admin.petition._form')

      <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
@endsection
