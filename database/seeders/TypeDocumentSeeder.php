<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeDocuments;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            ['dane' => '11', 'code' => 'RC', 'description' => 'Registro civil', 'state' => 1],
            ['dane' => '12', 'code' => 'TI', 'description' => 'Tarjeta de identidad', 'state' => 1],
            ['dane' => '13', 'code' => 'CC', 'description' => 'Cédula de ciudadanía', 'state' => 1],
            ['dane' => '21', 'code' => 'TE', 'description' => 'Tarjeta de extranjería', 'state' => 1],
            ['dane' => '22', 'code' => 'CE', 'description' => 'Cédula de extranjería', 'state' => 1],
            ['dane' => '31', 'code' => 'NT', 'description' => 'NIT', 'state' => 1],
            ['dane' => '41', 'code' => 'PS', 'description' => 'Pasaporte', 'state' => 1],
            ['dane' => '42', 'code' => 'DIE', 'description' => 'Documento de identificación extranjero', 'state' => 1],
            ['dane' => '50', 'code' => 'NOP', 'description' => 'Nit de otro país', 'state' => 1],
            ['dane' => '91', 'code' => 'NIUP', 'description' => 'NIUP', 'state' => 1],
        );
        foreach ($types as $value) {
            TypeDocuments::updateOrCreate($value);
        }
    }
}
