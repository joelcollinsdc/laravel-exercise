@extends('layouts.app')

@section('content')
<div class="container">
    <h1>New Petition</h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/petition') }}">
      <!-- {{ csrf_field() }} -->

      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="control-label">Title</label>

        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

      </div>

      <div class="form-group">
        <label for="summary" class="control-label">Summary</label>

        <textarea id="summary" type="text" class="form-control" name="summary" value="{{ old('summary') }}" autofocus></textarea>

        
      </div>

      <div class="form-group">
        <label for="body" class="control-label">Body</label>

        <textarea id="body" type="text" class="form-control" name="body" value="{{ old('body') }}" autofocus></textarea>

        
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
@endsection
