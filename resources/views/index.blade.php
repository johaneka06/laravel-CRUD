@extends('template.template')

@section('title', 'Home')

@section('content')
<div class="container text-center mt-5">

  <h3>Lists:</h3>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        @if(Auth::check())
        <th scope="col">Actions</th>
        @endif
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        @if(Auth::check())
        <td>
          <a href="#" class="badge badge-secondary">Edit</a>
          <a href="#" class="badge badge-danger">Delete</a>
        </td>
        @endif
      </tr>
    </tbody>
  </table>

</div>


@endsection