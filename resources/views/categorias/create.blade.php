@extends('layouts.app')
@section('title','Inserir Categorias')
@section('body')
<h4>Criar categoria</h4>
<div class="card border">
    <div class="card-body">
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome da Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" href="/categorias" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection



