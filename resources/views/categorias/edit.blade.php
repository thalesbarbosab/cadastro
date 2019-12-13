@extends('layouts.app')
@section('title','Editar Categorias')
@section('body')
<h4>Criar categoria</h4>
<div class="card border">
    <div class="card-body">
    <form action="/categorias/{{$cat->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
            <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome da Categoria" value="{{$cat->nome}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" href="/categorias" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection
