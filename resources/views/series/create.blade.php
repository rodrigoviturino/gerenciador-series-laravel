@extends('layout')

@section('header')
    Adiconar Série
@endsection

@section('content')

  <form method="post">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Insira o nome">
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control" id="" placeholder="">
    </div>
    
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>

@endsection
