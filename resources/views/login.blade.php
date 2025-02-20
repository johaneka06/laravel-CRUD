@extends('template.template')

@section('title', 'Login')

@section('content')

<div class="container mt-5">
  <h3 class="text-center">Login</h3>

  <div class="d-flex justify-content-center mt-3">
    <div class="card col-sm-6">
      <div class="card-body">
        <form action="{{ url('/auth') }}" method="post" class="form-group">
          @csrf
          <div class="form-inline row">
            <label for="email" class="col-3">Email: </label>
            <input type="email" name="email" id="email" placeholder="someone@domain.com" class="form-control col-9">
          </div>
          <div class="form-inline mt-3 row">
            <label for="password" class="col-3">Password: </label>
            <input type="password" name="password" id="password" placeholder="Your password" class="form-control col-9">
          </div>
          <div class="col-7 d-flex justify-content-end">
            <input type="submit" value="Login" class="btn btn-primary mt-4">
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection