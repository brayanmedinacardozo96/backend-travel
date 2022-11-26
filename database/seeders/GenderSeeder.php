<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = array(
            ['name'=>'Femenino', 'state' => 1],
            ['name'=>'Masculino', 'state' => 1],
            ['name'=>'Otro', 'state' => 1],
        );

        foreach ($genders as $value) {
            Gender::updateOrCreate($value);
        }
    }
}
