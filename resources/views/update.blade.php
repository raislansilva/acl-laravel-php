@extends('layouts.app')

@section('content')
<div class="container">
      <h1>{{$notice->title}}</h1>
      <p>{{$notice->description}}</p>
      <b>Aythor: {{$notice->user->name}}</b>
   
</div>
@endsection
