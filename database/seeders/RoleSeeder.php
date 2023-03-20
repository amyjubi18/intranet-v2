<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol = new Role;
        $rol->name = "Gtic";
        $rol->save();

        $rol1 = new Role;
        $rol1->name = "Gerente de Administrsción";
        $rol1->save();

        $rol2 = new Role;
        $rol2->name = "Administracion";
        $rol2->save();

        $rol3 = new Role;
        $rol3->name = "Auditoria";
        $rol3->save();

    }
}
