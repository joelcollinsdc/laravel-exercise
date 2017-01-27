@extends('layouts.app')

@section('content')


<h1>Administer Petitions</h1>

<div class="col-md-2 col-md-offset-10">
<a class="btn btn-primary" href="{{ URL::route('petition.create') }}">New Petition</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Published</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($petitions as $petition)
    <tr>
      <td><a href="{{ url('/admin/petition', $petition->id) }}">{{ $petition->title}}</a></td>
      <td>{{ $petition->published ? "Yes" : "No" }}</td>
      <td><a class="btn btn-default" href="{{ URL::route('petition.edit', $petition->id) }}">Edit</a></td>
      <td>
      <form method="POST" onsubmit="return confirm('Are you sure you want to delete this?')" action="{{ url('/admin/petition', $petition->id) }}">
        {{ method_field('DELETE') }}
        <input type="submit" class="btn btn-warning" value="Delete" />
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
