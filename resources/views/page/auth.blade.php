@extends('layout.main')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Username</h5>
        @include('layout.message')
        <form action="{{route('update')}}" method="POST">
          @csrf
          <div class="row mb-3">
            <label for="inputNameUpdate" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" value="" class="form-control" id="inputNameUpdate">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNameUpdate" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" class="form-control" id="inputNameUpdate">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Password</h5>
        @include('layout.message')
        <form action="{{route('password')}}" method="POST">
          @csrf
          <div class="row mb-3">
            <label for="inputNameUpdate" class="col-sm-2 col-form-label">Old Password</label>
            <div class="col-sm-10">
              <input type="password" name="password_old" value="" class="form-control" id="inputNameUpdate">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNameUpdate" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" class="form-control" id="inputNameUpdate">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNameUpdate" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" name="password_confirmation" value="" class="form-control" id="inputNameUpdate">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection