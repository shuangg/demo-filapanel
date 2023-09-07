<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ProductReview::factory(10)->create();
    }
}
