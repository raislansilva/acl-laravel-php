@extends('layouts.app')

@section('content')
<div class="container">
     
    <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Auth</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($notices as $notice)
     @can('Visualizar',$notice)
      <tr>
        <td>{{$notice->title}}</td>
        <td>{{$notice->description}}</td>
        <td>{{$notice->user->name}}</td>
        <td><a href="{{url("/notice/$notice->id/update")}}">Editar</a></td>
      </tr>
     @endcan 
     @endforeach 
    </tbody>
  </table> 

</div>
@endsection
