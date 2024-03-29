<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function index(){
        $registros = Address::all();

        return view('cadastroFuncionario', compact('registros'));
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
            $idu = $req->input('CPF');

            $endereco = [
                'rua' => $req->input('Endereco'),
                'CEP' => $req->input('CEP'),
                'complemento' => $req->input('Complemento'),
                'numero' => $req->input('Numero')
            ];
            $endereco = Address::create($endereco);
            $endereco->save();

            $dados = array(
                'nome' => $req->input('Nome'),
                'dataNascimento' => $req->input('dataNascimento'),
                'RG' => $req->input('RG'),
                'email' => $req->input('Email'),
                'password' => Hash::make($req->input('Senha')),
                'telefone' => $req->input('Telefone')
            );

            $usuario = User::where('CPF', $idu)->update($dados);

            if ($req->input('Gerente') == 'on' && !$usuario->hasRole('gerente')) {
                $usuario->assignRole('gerente');
            }

            if ($req->input('Gerenteoff') == 'off' && $usuario->hasRole('gerente')) {
                $usuario->removeRole('gerente');
            }

            return redirect()->back()->with('alert-success', 'Funcionário alterado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert-error', 'Um ou mais campos estão incorretos.');
        }
    }

}
