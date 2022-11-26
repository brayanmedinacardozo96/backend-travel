<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaritalStatus;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = array(
            ['id' => 1, 'name' => 'Casado (a)', 'state' => 1],
            ['id' => 2, 'name' => 'Separado (a)', 'state' => 1],
            ['id' => 3, 'name' => 'Soltero (a)', 'state' => 1],
            ['id' => 4, 'name' => 'Unión Libre', 'state' => 1],
            ['id' => 5, 'name' => 'Viudo (a)', 'state' => 1],
        );



        foreach ($genders as $value) {
            MaritalStatus::updateOrCreate($value);
        }


    }
}
