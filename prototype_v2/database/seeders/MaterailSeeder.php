<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materail;

class MaterailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materail::factory()
        ->count(10)
        ->create();
    }
}
