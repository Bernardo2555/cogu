<?php

namespace App\Http\Controllers;

use App\InOut;
use App\Stock;
use App\Provider;
use App\OutboundSupplier;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    public function index()
    {
        $registros1 = Product::all();
        $registros2 = InOut::all();
        $registros3 = Provider::all();


        return view('estoque', compact('registros1', 'registros2', 'registros3'));
    }

    public function salvar(Request $req)
    {

        try {

            $produto = Product::where('idProduto', $req->input('produtoId'))->first();

            $prod = $produto->quantidadeTotal;

            $produtos = array(
                'quantidadeTotal' => ($prod + $req->input('Quantidade'))
            );
            Product::where('idProduto', $req->input('produtoId'))->update($produtos);

            $dados = array(
                'produtoId' => $req->input('produtoId'),
                'validade' => $req->input('validade'),
                'quantidade' => $req->input('Quantidade'),
                'dataColheita' => $req->input('dataColheita'),
                'dataES' => Carbon::now(),
                'tipo' => 'entrada',
                'localArmazenamento' => $req->input('localArmazenamento'),
                'dataDesidratado' => null,
                'lote' => null,
                'funcionarioId' => Auth::user()->idUsuario
            );


            $idES = InOut::create($dados);
            $idES->save();

            $fornecedor = Provider::find($req->input('fornecedorId'));

            $fornecedor->entradaSaidas()->attach($idES);

            return redirect()->back()->with('alert-success', 'Inserido no estoque com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Falha ao inserir produto no estoque!');
        }
    }

    public function retira(Request $req)
    {

        try {

            $produto = Product::where('idProduto', $req->input('produtoId'))->first();

            $prod = $produto->quantidadeTotal;

            if ($req->input('Quantidade') <= $prod) {

                $produtos = array(
                    'quantidadeTotal' => ($prod - $req->input('Quantidade'))
                );
                Product::where('idProduto', $req->input('produtoId'))->update($produtos);

                $dados = array(
                    'produtoId' => $req->input('produtoId'),
                    'validade' => $req->input('validade'),
                    'quantidade' => $req->input('Quantidade'),
                    'dataColheita' => $req->input('dataColheita'),
                    'dataES' => Carbon::now(),
                    'tipo' => 'saida',
                    'dataDesidratado' => null,
                    'lote' => null,
                    'funcionarioId' => Auth::user()->idUsuario
                );


                $idES = InOut::create($dados);
                $idES->save();

                return redirect()->back()->with('alert-success', 'Produto retirado com sucesso!');
            } else
                return redirect()->back()->with('alert-danger', 'Não é possivel retirar uma quantidade maior que a disponível.');


        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }

    }


}
