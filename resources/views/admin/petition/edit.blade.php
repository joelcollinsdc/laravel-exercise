@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Petition</h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/petition', $petition->id) }}">
      {{ method_field('PATCH') }}
      <!-- {{ csrf_field() }} -->

      <input type="hidden" name="id" value="{{$petition->id}}"/>
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="control-label">Title</label>

        <input id="title" type="text" class="form-control" name="title" value="{{ $petition->title }}" required autofocus>

      </div>

      <div class="form-group">
        <label for="summary" class="control-label">Summary</label>

        <textarea id="summary" type="text" class="form-control" name="summary" autofocus>{{ $petition->summary }}</textarea>

        
      </div>

      <div class="form-group">
        <label for="body" class="control-label">Body</label>

        <textarea id="body" type="text" class="form-control" name="body" autofocus>{{ $petition->body }}</textarea>

        
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
@endsection
