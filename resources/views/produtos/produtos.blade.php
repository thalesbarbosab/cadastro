@extends('layouts.app')
@section('title','Produtos')
@section('body')
    <button class="btn btn-primary" onclick="novoProduto()">inserir produtos</button>
    <br><br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Produtos</h5>
            <table class="table table-bordered table-houver">
                <thead>
                    <th>Nome Produto</th>
                    <th>Qtd Estoque</th>
                    <th>Preço Venda</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
  <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dlgProdutos">
        adicionar produto
    </button>

  <!-- Modal -->
  <div class="modal fade" id="dlgProdutos" tabindex="-1" role="dialog" aria-labelledby="dlgProdutos" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dlgProdutos">Adicionar Produto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/produtos" method="POST" id="formProdutos">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome do produto">
                </div>
                <div class="form-group">
                    <label for="txtEstoque">Quantidade Estoque</label>
                    <input type="number" class="form-control" name="txtEstoque" required id="txtEstoque" placeholder="Insira a quantidade em estoque">
                </div>
                <div class="form-group">
                    <label for="txtPreco">Preço</label>
                    <input type="number" step="any" class="form-control" name="txtPreco" required id="txtPreco" placeholder="Insira o preco de venda">
                </div>
                <div class="form-group">
                    <label for="cbCategoria">Categoria</label>
                    <select name="cbCategoria" id="cbCategoria" class="form-control" required>
                        <option value="">Selecione uma categoria</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="cancel" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
          <button type="submit" class="btn btn-primary">salvar</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
  <script type="text/javascript">
    function novoProduto(){
        $('dlgProdutos').modal('show')
    }
    function todasCategorias(){
        $.getJSON('/api/categorias', function(data){

        })
    })
  </script>
@endsection
