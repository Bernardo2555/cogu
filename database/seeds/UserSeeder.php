<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new \App\User([
            'CPF' => '000.000.000/00',
            'enderecoId' => 1,
            'email' => 'cogumeloscogumais@outlook.com',
            'nome' => 'Cogumelinho',
            'RG' => '00.000.000',
            'password' => Hash::make('melomelo321'),
            'telefone' => '(46) 99905-1076',
            'remember_token' => 'KjF6hUIZ2d'
        ]);
        $usuario->save();
        $usuario->assignRole('gerente');
    }
}
