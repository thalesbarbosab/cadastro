@extends('layouts.app')
@section('title','Produtos')
@section('body')
    <a class="btn btn-primary" href="/produtos/create">inserir produtos</a>
    <br><br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Produtos</h5>
            @if(count($produtos) > 0)
                <table class="table table-bordered table-houver">
                    <thead>
                        <th>Nome Produto</th>
                        <th>Qtd Estoque</th>
                        <th>Preço Venda</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $p)
                            <tr>
                                <td>{{$p->nome}}</td>
                                <td>{{$p->estoque}} unidades</td>
                                <td>R$ {{$p->preco}}</td>
                                <td>{{$p->categoria->nome ?? 'sem'}}</td>
                                <td>
                                    <a href="{{route('produtos.edit', $p->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="{{route('produtos.destroy', $p->id)}}" class="btn btn-sm btn-danger">Remover</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <span>Nenhum produto cadastrado</span>
            @endif
        </div>
    </div>
@endsection
