<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diversity;

class DiversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* diversidades */
        $diversities = array(
            ['name' => 'Heterosexual', 'state' => 1],
            ['name' => 'Homosexual', 'state' => 1],
            ['name' => 'Bisexual', 'state' => 1],
            ['name' => 'Otra', 'state' => 1]
        );

        foreach ($diversities as $value) {
            Diversity::updateOrCreate($value);
        }
    }
}
