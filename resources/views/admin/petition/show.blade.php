@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Petition: {{$petition->id}}</div>

                <div class="panel-body">
                
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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

                  
                  <a class="btn btn-default" href="{{ URL::route('petition.edit', $petition->id) }}">Edit</a>

                  @if ($petition->published == false)
                    <form method="POST" class="form form-inline" 
                        action="{{ URL::route('petition.publish', $petition->id) }}">
                          {{ method_field('PUT') }}
                          <input type="submit" class="btn btn-primary" value="Publish" />
                    </form>
                  @else
                    <form method="POST" class="form form-inline" 
                        action="{{ URL::route('petition.unpublish', $petition->id) }}">
                          {{ method_field('PUT') }}
                          <input type="submit" class="btn btn-warning" value="Unpublish" />
                    </form>
                  @endif
                </div>
                  
            </div>
        </div>
    </div>
</div>
@endsection
