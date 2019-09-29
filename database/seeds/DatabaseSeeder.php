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
        $this->call(LicenciaTableSeeder::class);
        $this->call(LicenciaFactorySeeder::class);
        $this->call(DepartamentoTableSeeder::class);
    }
}
