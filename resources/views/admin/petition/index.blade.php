@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Petitions</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>title</th>
                      <th>published</th>
                      <th></th>
                    </thead>
                    @foreach($petitions as $petition)
                      <tr>
                        <td>{{ $petition->title}}</td>
                        <td>{{ $petition->published ? "yes" : "no" }}</td>
                        <td><a href="{{ URL::route('petition.edit', $petition->id) }}">Edit</a></td>
                      </tr>
                    @endforeach
                  </table>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@endsection
