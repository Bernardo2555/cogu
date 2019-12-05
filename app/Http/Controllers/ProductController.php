<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

        $registros1 = Product::all();


        return view('cadastroProduto', compact('registros1'));
    }

    public function salvar(Request $req)
    {
        try {
            $dados = array(
                'nome' => $req->input('Nome'),
                'quantidadeMinima' => $req->input('quantidadeMinima'),
                'quantidadeTotal' => 0.0,
                'medida' => $req->input('medida'),
                'valor' => 'R$'.$req->input('Valor'),
                'localArmazenamento' => $req->input('localArmazenamento')
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
            $produtos = array(
                'quantidadeMinima' => $req->input('quantidadeMinima'),
                'quantidadeTotal' => 0.0,
                'medida' => $req->input('medida'),
                'valor' => 'R$'.$req->input('Valor'),
                'localArmazenamento' => $req->input('localArmazenamento')
            );

            Product::where('idProduto', $id)->update($produtos);
            return redirect()->back()->with('alert-success', 'Produto alterado com sucesso!');
        } catch (\Exception $e){
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }
}
