<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new \App\Provider([
            'idFornecedor' => 1,
            'enderecoId' => 1,
            'nomeFantasia' => 'CoguMais',
            'nomeVendedor' => 'Cogumelinho',
            'contato' => '(46) 99905-1076',
            'CNPJ' => '32.066.594/0001-20'
        ]);
        $fornecedor->save();
    }
}
