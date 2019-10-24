<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $permissions = array(
            'cadastrarFuncionario',
            'cadastrarFornecedor',
            'gerarRelatorio'
        );

        foreach ($permissions as $permission){
            Permission::create([
                'name' => $permission
            ]);
        }

        $role = Role::create(['name' => 'gerente']);

        $role->givePermissionTo(Permission::all());
    }
}
