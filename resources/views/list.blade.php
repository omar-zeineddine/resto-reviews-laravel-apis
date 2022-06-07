@extends('layout')

@section('content')

<h1>Restaurant list</h1>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">location</th>
      <th scope="col">rating</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->location}}</td>
      <td>{{$item->rating}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop