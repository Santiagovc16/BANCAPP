<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuenta;
use App\Models\User; // Importa el modelo de usuario para asociar las cuentas
use Faker\Factory as Faker;

class CuentaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Obtén todos los usuarios para asignar cuentas
        $users = User::all();

        // Recorre cada usuario y asigna cuentas aleatorias
        foreach ($users as $user) {
            // Crear entre 1 y 3 cuentas por usuario
            for ($i = 0; $i < rand(1, 3); $i++) {
                Cuenta::create([
                    'numero_cuenta' => $faker->unique()->bankAccountNumber,
                    'saldo' => $faker->randomFloat(2, 100, 10000), // Saldo entre 100 y 10,000
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}

