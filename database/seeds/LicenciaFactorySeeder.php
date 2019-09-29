<?php

use Illuminate\Database\Seeder;

class LicenciaFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Licencia::class, 5)->create();
    }
}
