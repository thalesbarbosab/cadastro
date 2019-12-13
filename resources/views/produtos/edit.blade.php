@extends('layouts.app')
@section('title','Editar Produto')
@section('body')
<h4>Alterar produto {{$produto->nome}}</h4>
<div class="card border">
    <div class="card-body">
    <form action="{{route('produtos.update', $produto->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
            <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome do produto" value="{{$produto->nome}}">
            </div>
            <div class="form-group">
                <label for="txtEstoque">Quantidade Estoque</label>
                <input type="number" class="form-control" name="txtEstoque" required id="txtEstoque" placeholder="Insira a quantidade em estoque" value="{{$produto->estoque}}">
            </div>
            <div class="form-group">
                <label for="txtPreco">Preço</label>
                <input type="number" class="form-control" name="txtPreco" required id="txtPreco" placeholder="Insira o preco de venda" value="{{$produto->preco}}">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Categoria</label>
                <select name="cbCategoria" id="cbCategoria" class="form-control" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categorias as $c)
                        @if($c->id == $produto->categoria_id)
                            <option selected value="{{$c->id}}">{{$c->nome}}
                        @else
                            <option value="{{$c->id}}">{{$c->nome}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" href="/produtos" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection



