<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        return view('cadastroProduto');
    }

    public function salvar(Request $req)
    {
        try {
            $dados = array(
                'nome' => $req->input('Nome'),
                'quantidadeMinima' => $req->input('quantidadeMinima'),
                'quantidadeTotal' => 0.0,
                'valor' => $req->input('Valor')
            );

            Product::create($dados);
            return redirect()->back()->with('alert-success', 'Produto cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Falha ao cadastrar produto!');
        }
    }

    public function alterar(Request $req)
    {
        try {
            $id = $req->input('produtoId');
            $att = array(
                'nome' => $req->input('Nome'),
                'quantidadeMinima' => $req->input('quantidadeMinima'),
                'quantidadeTotal' => 0.0,
                'valor' => $req->input('Valor')
            );

            Product::where('idProduto', $id)->update($att);
            return redirect()->back()->with('alert-success', 'Produto alterado com sucesso!');
        } catch (\Exception $e){
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }
}
