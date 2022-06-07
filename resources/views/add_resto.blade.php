@extends('layout')

@section('content')
<h1>Add restaurant page</h1>
<div class="col-sm-12">

<form method="post" action="">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter restaurant name">
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter restaurant description">
  </div>

  <div class="form-group">
    <label>Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter restaurant location">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop