<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function index(){
        return view('cadastroFuncionario');
    }

    public function salvar(Request $req)
    {

        try {

            $endereco = [
                'rua' => $req->input('Endereco'),
                'CEP' => $req->input('CEP'),
                'complemento' => $req->input('Complemento'),
                'numero' => $req->input('Numero')
            ];
            $endereco = Address::create($endereco);
            $endereco->save();

            $dados = array(
                'UsuarioId' => null,
                'nome' => $req->input('Nome') . " " . $req->input('ultimoNome'),
                'dataNascimento' => $req->input('dataNascimento'),
                'RG' => $req->input('RG'),
                'CPF' => $req->input('CPF'),
                'email' => $req->input('Email'),
                'password' => Hash::make($req->input('password')),
                'telefone' => $req->input('Telefone'),
                'enderecoId' => $endereco->id

            );
            $usuario = new User($dados);
            $usuario->endereco()->associate($endereco);
            $usuario->save();

            if ($req->input('Gerente') == 'on') {
                $usuario->assignRole('gerente');
            }

            return redirect()->back()->with('alert-success', 'Funcionário cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Falha ao cadastrar funcionário!');
        }
    }

    public function atualizar(Request $req)
    {

        try {

            $ide = $req->input('enderecoId');
            $idu = $req->input('idUsuario');

            $endereco = [
                'rua' => $req->input('Endereco'),
                'CEP' => $req->input('CEP'),
                'complemento' => $req->input('Complemento'),
                'numero' => $req->input('Numero')
            ];
            Address::where('idEndereco', $ide)->update($endereco);


            $dados = array(
                'idUsuario' => $idu,
                'nome' => $req->input('Nome'),
                'dataNascimento' => $req->input('dataNascimento'),
                'RG' => $req->input('RG'),
                'CPF' => $req->input('CPF'),
                'email' => $req->input('Email'),
                'password' => Hash::make($req->input('Senha')),
                'telefone' => $req->input('Telefone'),
                'enderecoId' => $ide

            );
            $usuario = User::where('idUsuario', $idu)->update($dados);

            if ($req->input('Gerente') == 'on' && !$usuario->hasRole('gerente')) {
                $usuario->assignRole('gerente');
            }

            if (!$req->input('Gerente') == 'on' && $usuario->hasRole('gerente')) {
                $usuario->removeRole('gerente');
            }

            return redirect()->back()->with('alert-success', 'Funcionário alterado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }

}
