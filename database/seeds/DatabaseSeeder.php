<?php

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
        $this->call(UsuariosTableSeeder::class);
        $this->call(PrazosTableSeeder::class);
        $this->call(TipoContasTableSeeder::class);
        $this->call(MetodoPagamentosTableSeeder::class);
    }
}