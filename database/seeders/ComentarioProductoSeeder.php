<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComentarioProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ComentarioProducto::factory(10)->create();
    }
}
