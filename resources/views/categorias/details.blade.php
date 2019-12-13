@extends('layouts.app')
@section('title','Categoria {{$cat->id}}')
@section('body')
    <a class="btn btn-primary" href="/categorias">voltar</a>
    <br><br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Categoria {{$cat->nome}}</h5>
            <table class="table table-responsive">
                <thead>
                    <th>ID</th>
                    <th>Nome da Categoria</th>
                    <th>Data inclusão</th>
                    <th>Ultima Data Atualização</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>{{Date("d/m/Y H:i:s", strToTime($cat->created_at))}}</td>
                        <td>{{Date("d/m/Y H:i:s", strToTime($cat->updated_at))}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
