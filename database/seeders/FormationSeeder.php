<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::insert([
            [
                'id' => 1,
                // 'uuid' => 'jdgqjdffd345vsw',
                'name' => 'Alain',
                'phone' => '71406288',
                'reservation' => 'true',
                'module' => 'dev web',
                'formation' => 'ligne',
                'email' => 'alain@gmail.com',
                'suggestion' => 'je veux 2h de cour par jour',
            ],
            [
                'id' => 2,
                // 'uuid' => 'jdgqjddgd345vsw',
                'name' => 'Alino',
                'phone' => '71406288',
                'reservation' => 'true',
                'module' => 'dev web',
                'formation' => 'presentielle',
                'email' => 'alain@gmail.com',
                'suggestion' => 'je veux 4h de cour par jour',
            ],
        ]);
    }
}
