@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Petitions</div>

                <a class="btn btn-primary" href="{{ URL::route('petition.create') }}">New Petition</a>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>title</th>
                      <th>published</th>
                      <th></th>
                    </thead>
                    @foreach($petitions as $petition)
                      <tr>
                        <td><a href="{{ url('/admin/petition', $petition->id) }}">{{ $petition->title}}</a></td>
                        <td>{{ $petition->published ? "yes" : "no" }}</td>
                        <td><a class="btn btn-default" href="{{ URL::route('petition.edit', $petition->id) }}">Edit</a></td>
                        <td>
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this?')" action="{{ url('/admin/petition', $petition->id) }}">
                          {{ method_field('DELETE') }}
                          <input type="submit" class="btn btn-warning" value="Delete" />
                        </form>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@endsection
