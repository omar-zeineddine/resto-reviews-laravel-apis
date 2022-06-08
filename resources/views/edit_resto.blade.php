@extends('layout')

@section('content')
<div class="col-sm-12">

<h1>edit restaurant</h1>

<form method="post" action="">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="name" name="name" class="form-control" value="{{$data->name}}" placeholder="enter restaurant name">
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control" value="{{$data->description}}"  placeholder="enter restaurant description">
  </div>

  <div class="form-group">
    <label>Location</label>
    <input type="text" name="location" class="form-control" value="{{$data->location}}" placeholder="enter restaurant location">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
