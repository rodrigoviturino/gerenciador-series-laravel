@extends('layout')

@section('header')
    séries
@endsection

@section('content')
    
<a href="/series/criar" class="btn btn-primary my-3">Adicionar</a>
<ul class="list-group">
    @foreach ($series as $serie) : 
        <li class="list-group-item"><?= $serie; ?></li>
    @endforeach
</ul>

@endsection