<?php

namespace Database\Seeders;

use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeDocumentSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DiversitySeeder::class);
        $this->call(EthnicGroupSeeder::class);
        $this->call(EducationLevelSeeder::class);
        $this->call(DisabilitySeeder::class);
        $this->call(VulnerabilitySeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(ComunaSeeder::class);
        $this->call(NeighborhoodSeeder::class);
        $this->call(NeighborhoodSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(ParameterSeeder::class);
    }
}
