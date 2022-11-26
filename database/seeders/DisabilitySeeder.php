<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disability;

class DisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* discapacidades */
        $disabilities = array(
            ['name' => 'Ninguna', 'state' => 1],
            ['name' => 'Auditiva', 'state' => 1],
            ['name' => 'Intelectual', 'state' => 1],
            ['name' => 'Física', 'state' => 1],
            ['name' => 'Múltiple', 'state' => 1],
            ['name' => 'Sordoceguera', 'state' => 1],
            ['name' => 'Visual', 'state' => 1],
        );
        foreach ($disabilities as $value) {
            Disability::updateOrCreate($value);
        }
    }
}
