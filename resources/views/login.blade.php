@extends('layout')

@section('content')
<h1>Login</h1>

<div class="col-sm-12">

<form method="post" action="login">
@csrf
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control"  placeholder="email">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="password">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@stop