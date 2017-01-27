@extends('layouts.app')

@section('content')
  <div class="container">
    @include('messages')

  
      <h1>New Petition</h1>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/petition') }}" enctype="multipart/form-data">
        <!-- TODO {{ csrf_field() }} -->

        @include('admin.petition._form', ['petition' => new \App\Petition ])

        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
  </div>
@endsection
