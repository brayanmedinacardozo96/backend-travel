<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationLevel;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* niveles de educacion */
        $educationlevels = array(
            ['id' => 1, 'name' => 'Preescolar', 'state' => 1],
            ['id' => 2, 'name' => 'Primaria completa', 'state' => 1],
            ['id' => 3, 'name' => 'Primaria incompleta', 'state' => 1],
            ['id' => 4, 'name' => 'Bachiller completo', 'state' => 1],
            ['id' => 5, 'name' => 'Bachiller incompleto', 'state' => 1],
            ['id' => 6, 'name' => 'Técnico', 'state' => 1],
            ['id' => 7, 'name' => 'Tecnólogo', 'state' => 1],
            ['id' => 8, 'name' => 'Universitario', 'state' => 1],
            ['id' => 9, 'name' => 'Posgrado', 'state' => 1],
            ['id' => 10, 'name' => 'Ninguno', 'state' => 1],
            ['id' => 11, 'name' => 'Sin estudio', 'state' => 1],


        );

        foreach ($educationlevels as $value) {
            EducationLevel::updateOrCreate($value);
        }
    }
}
