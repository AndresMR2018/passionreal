<?php

namespace Database\Seeders;

use App\Models\Credito;
use Illuminate\Database\Seeder;

class CreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Credito::create([
            'valor'=>0.0,
            'cantidad'=>10,
            'descuento'=>0
        ]);
    }
}
