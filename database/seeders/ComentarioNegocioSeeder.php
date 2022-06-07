<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComentarioNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ComentarioNegocio::factory(10)->create();
    }
}
