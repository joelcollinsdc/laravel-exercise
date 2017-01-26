@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Petitions</div>

                <div class="panel-body">
                
                <dl>

                  <dt>Title</dt>
                  <dd>{{$petition->title}}</dd>

                  <dt>Published</dt>
                  <dd>{{$petition->published? 'Yes' : 'No'}}</dd>

                  <dt>Summary</dt>
                  <dd>{{$petition->summary}}</dd>

                  <dt>Body</dt>
                  <dd>{{$petition->body}}</dd>


                </div>
                  
            </div>
        </div>
    </div>
</div>
@endsection
