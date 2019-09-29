<?php

use Illuminate\Database\Seeder;
use App\Models\Licencia;

class LicenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licencia::create([
           'tipo_licencia' =>  'Primera Clase',
           'valor_licencia' => 500000
        ]);

        Licencia::create([
            'tipo_licencia' =>  'Segunda Clase',
            'valor_licencia' => 250000
         ]);

         Licencia::create([
            'tipo_licencia' =>  'Tercera Clase',
            'valor_licencia' => 125000
         ]);
    }
}
