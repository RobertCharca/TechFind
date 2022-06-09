<?php

namespace Database\Seeders;

use App\Models\Usuario;
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
        $this->call([
            UserSeeder::class,
            ComentarioNegocioSeeder::class,
            ComentarioProductoSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\Negocio::factory(10)->create();
        \App\Models\detalleNegocio::factory(10)->create();

        /*
        $this->call([
            UserSeeder::class,
            ComentarioNegocioSeeder::class,
            ComentarioProductoSeeder::class,
        ]);
        */

    }
}
