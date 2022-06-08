@extends('layout')

@section('content')

<h1>Restaurant list</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">location</th>
      <th scope="col">rating</th>
      <th scope="col">modify</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->location}}</td>
      <td>{{$item->rating}}</td>
      <td>

      <a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
      <a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop