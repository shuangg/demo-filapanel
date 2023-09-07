<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\CustomerAddress::factory(10)->create();
    }
}
