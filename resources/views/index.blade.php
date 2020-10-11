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
          <a href="{{ url('/item/1') }}" class="badge badge-secondary">Update</a>
          <a href="{{ url('/item/1/delete') }}" class="badge badge-danger">Delete</a>
        </td>
        @endif
      </tr>
    </tbody>
  </table>

  <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#staticBackdrop">Insert new data</button>

</div>

@include('addItem')

@endsection