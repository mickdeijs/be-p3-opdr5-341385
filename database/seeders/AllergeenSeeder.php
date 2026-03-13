<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergeenSeeder extends Seeder
{
    public function run()
    {
        $allergenen = [
            ['naam' => 'Gluten', 'omschrijving' => 'Glutenbevattende granen'],
            ['naam' => 'Lactose', 'omschrijving' => 'Melk en melkproducten'],
            ['naam' => 'Noten', 'omschrijving' => 'Alle soorten noten'],
            ['naam' => 'Soja', 'omschrijving' => 'Soja en sojaproducten'],
            ['naam' => 'Schaaldieren', 'omschrijving' => 'Schaaldieren en producten daarvan'],
        ];

        foreach ($allergenen as $allergeen) {
            DB::table('Allergeen')->insert($allergeen);
        }
    }
}
