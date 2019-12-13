@extends('layouts.app')
@section('title','Categorias')
@section('body')
    <a class="btn btn-primary" href="/categorias/create">inserir categoria</a>
    <br><br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Categorias</h5>
            @if(count($cats) > 0)
                <table class="table table-bordered table-houver">
                    <thead>
                        <th>Nome Categoria</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($cats as $c)
                            <tr>
                                <td>{{$c->nome}}</td>
                                <td>
                                    <a href="{{route('categorias.show', $c->id)}}" class="btn btn-sm btn-primary" >Detalhes</a> |
                                    <a href="{{route('categorias.edit', $c->id)}}" class="btn btn-sm btn-primary">Editar</a> |
                                    <a href="categorias/apagar/{{$c->id}}" class="btn btn-sm btn-danger">Remover</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <span>Nenhuma categoria cadastrada</span>
            @endif
        </div>
    </div>
@endsection
