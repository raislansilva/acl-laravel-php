@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($notices as $notice)
    @can('Visualizar',$notice)
        <h1>{{$notice->title}}</h1>
        <p>{{$notice->description}}</p>
        <b>Author: {{$notice->user->name}}</b>
    
        <a href="{{url("/notice/$notice->id/update")}}">Editar</a>
        <hr>
    @endcan

    @empty
       <p>Nenhum post cadastrado</p>
    @endforelse
     

</div>
@endsection
