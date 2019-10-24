<?php

namespace App\Http\Controllers;

use App\Address;
use App\Provider;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProviderController extends Controller
{

    public function index(){
        return view('cadastroFornecedor');
    }

    public function salvar(Request $req)
    {

        try {

            $endereco = array(
                'rua' => $req->input('rua'),
                'CEP' => $req->input('CEP'),
                'complemento' => $req->input('Complemento'),
                'numero' => $req->input('Numero')
            );
            $endereco = Address::create($endereco);
            $endereco->save();

            $dados = array(
                'enderecoId' => $endereco->id,
                'nomeFantasia' => $req->input('nomeDaEmpresa'),
                'nomeVendedor' => $req->input('nomeDoVendedor'),
                'contato' => $req->input('Telefone'),
                'CNPJ' => $req->input('CNPJ')
            );

            $fornecedor = new Provider($dados);
            $fornecedor->endereco()->associate($endereco);
            $fornecedor->save();

            return redirect()->back()->with('alert-success', 'Fornecedor inserido com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Falha ao inserir fornecedor!');
        }
    }

    public function alterar(Request $req)
    {

        try {

            $idFor = $req->input('CNPJ');
            $idEnd = $req->input('CEP');

            $endereco = array(
                'rua' => $req->input('Endereco'),
                'complemento' => $req->input('Complemento'),
                'numero' => $req->input('Numero')
            );
            $endereco = Address::where('idEndereco', $idEnd)->update($endereco);

            $att = array(
                'enderecoId' => $endereco->input('idEndereco'),
                'nomeFantasia' => $req->input('nomeDaEmpresa'),
                'nomeVendedor' => $req->input('nomeDoVendedor'),
                'contato' => $req->input('Telefone'),
            );

            $fornecedor = new Provider($att);
            $fornecedor->endereco()->associate($endereco);

            Provider::where('idFornecedor', $idFor)->update($fornecedor);
            return redirect()->back()->with('alert-success', 'Fornecedor alterado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }
}
