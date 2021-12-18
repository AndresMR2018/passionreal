<?php

namespace Database\Seeders;

use CreatePaymentPlatformsTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentPlatformSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CreditosSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
