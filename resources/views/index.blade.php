@extends('template.template')

@section('title', 'Home')

@section('content')
<div class="container text-center mt-5">

  <h3>Welcome, guest!</h3>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Stock</th>
        @if(Auth::user() != null)
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
        @if(Auth::user() != null)
        <td>
          <a href="{{ url('/item/1') }}" class="badge badge-secondary">Update</a>
          <a href="{{ url('/item/1/delete') }}" class="badge badge-danger">Delete</a>
        </td>
        @endif
      </tr>
    </tbody>
  </table>
  @if(Auth::user() != null)
  <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#staticBackdrop">Insert new data</button>
  @endif
</div>

@include('addItem')

@endsection