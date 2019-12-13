<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Produto;
use \App\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.produtos');
        /*
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Produto;
        $p->nome = $request->txtNome;
        $p->estoque = $request->txtEstoque;
        $p->preco = $request->txtPreco;
        $p->categoria_id = $request->cbCategoria;
        $p->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(isset($id)){
            $produto = Produto::find($id);
            $categorias = Categoria::all();
            return view('produtos.edit', compact('produto','categorias'));
        }
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(isset($id)){
            $produto = Produto::find($id);
            $produto->nome = $request->txtNome;
            $produto->estoque = $request->txtEstoque;
            $produto->preco = $request->txtPreco;
            $produto->categoria_id = $request->cbCategoria;
            $produto->save();
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($id)){
            $produto = Produto::find($id);
            $produto->delete();
            return redirect('/produtos');
        }

    }
}
