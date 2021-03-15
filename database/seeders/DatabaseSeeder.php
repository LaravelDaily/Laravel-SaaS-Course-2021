<?php

namespace Database\Seeders;

use App\Models\Plan;
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
        Plan::create(['name' => 'Bronze Plan', 'price' => 999]);
        Plan::create(['name' => 'Silver Plan', 'price' => 1999]);
        Plan::create(['name' => 'Gold Plan', 'price' => 2999]);
        // \App\Models\User::factory(10)->create();
    }
}
