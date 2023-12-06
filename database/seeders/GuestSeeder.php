<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Guest::factory(1)->create();
    }
}