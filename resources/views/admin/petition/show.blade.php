@extends('layouts.app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Adminster Petition</div>

  <div class="panel-body">
  
    @include('messages')

    <dl>

      <dt>Title</dt>
      <dd>{{$petition->title}}</dd>

      <dt>Published</dt>
      <dd>{{$petition->published? 'Yes' : 'No'}}</dd>

      <dt>Summary</dt>
      <dd>{{$petition->summary}}</dd>

      <dt>Body</dt>
      <dd>{{$petition->body}}</dd>
    </dl>

    <a class="btn btn-default" href="{{ URL::route('petition.public', $petition->id) }}">View Publicly</a>

    <a class="btn btn-default" href="{{ URL::route('petition.edit', $petition->id) }}">Edit</a>

    @if ($petition->published == false)
      <form method="POST" class="button-form form form-inline" 
          action="{{ URL::route('petition.publish', $petition->id) }}">
            {{ method_field('PUT') }}
            <input type="submit" class="btn btn-primary" value="Publish" />
      </form>
    @else
      <form method="POST" class="button-form form" 
          action="{{ URL::route('petition.unpublish', $petition->id) }}">
            {{ method_field('PUT') }}
            <input type="submit" class="btn btn-warning" value="Unpublish" />
      </form>
    @endif
  </div>
</div>            

<div class="panel panel-default">
  <div class="panel-heading">Signatures</div>
  <div class="panel-body">
    @if ($petition->signatures->count() === 0)
      No signatures yet...
    @else
      <table class="table table-striped">
      @foreach ($petition->signatures as $signature)
        <tr>
          <td>{{$signature->name}}</td>
          <td>{{$signature->phone}}</td>
          <td>{{$signature->email}}</td>
        </tr>
      @endforeach
      </table>
    @endif
  </div>
</div>
@endsection
