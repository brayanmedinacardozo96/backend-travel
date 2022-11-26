<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EthnicGroup;

class EthnicGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* niveles de educacion */
        $EthnicGroups = array(
            ['id'=>1,'name' => 'Ninguno', 'state' => 1],
            ['id'=>2,'name' => 'Afrodescendiente', 'state' => 1],
            ['id'=>3,'name' => 'Indígena', 'state' => 1],
            ['id'=>4,'name' => 'Migrante', 'state' => 1],
            ['id'=>5,'name' => 'Mestizo', 'state' => 1],
            ['id'=>6,'name' => 'Otro', 'state' => 1],
        );

        foreach ($EthnicGroups as $value) {
            EthnicGroup::updateOrCreate($value);
        }
    }
}
