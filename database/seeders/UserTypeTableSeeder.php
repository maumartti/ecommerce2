<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create([
            'name' => 'Usuario',
        ]);
        UserType::create([
            'name' => 'Vendedor',
        ]);
        UserType::create([
            'name' => 'Administrador',
        ]);
    }
}
