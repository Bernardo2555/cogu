<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endereco = new \App\Address([
            'idEndereco' => 1,
            'CEP' => '456789',
            'rua' => 'bsjdajsd',
            'numero' => 56789,
            'complemento' => 'casa',
            'cidade' => 'Guarapuava',
            'estado' => 'PR'
        ]);
        $endereco->save();
    }
}
