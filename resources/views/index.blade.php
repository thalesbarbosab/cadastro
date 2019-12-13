@extends('layouts.app')
@section('title','Inicio')
@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
                <div class="col-md-6">
                <div class="card deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Cadastro de Produtos</h5>
                                <p class="card-text">Inclusão de todos os produtos</p>
                                <a href="/produtos" class="btn btn-primary">Inclua seus produtos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Cadastro de Categorias</h5>
                                <p class="card-text">Inclusão de todas as categorias</p>
                                <a href="/categorias" class="btn btn-primary">Inclua suas categorias</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
