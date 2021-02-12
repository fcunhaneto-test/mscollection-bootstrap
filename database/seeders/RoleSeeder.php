<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assinante = [
            'role' => 'assin',
            'name' => 'Assinante',
            'description' => 'Assinante pode ler o frontend, comentar e dar notas.'
        ];

        Role::create($assinante);

        $admin = [
            'role' => 'admin',
            'name' => 'Administrador',
            'description' => 'Administrador poder total.'
        ];

        Role::create($admin);
    }
}
