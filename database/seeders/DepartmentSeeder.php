<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array(
            /*01*/ ['dane'=> '05', 'name'=> 'Antioquia'],
            /*02*/ ['dane'=> '08', 'name'=> 'Atlántico'],
            /*03*/ ['dane'=> '11', 'name'=> 'Bogotá D.C.'],
            /*04*/ ['dane'=> '13', 'name'=> 'Bolívar'],
            /*05*/ ['dane'=> '15', 'name'=> 'Boyacá'],
            /*06*/ ['dane'=> '17', 'name'=> 'Caldas'],
            /*07*/ ['dane'=> '18', 'name'=> 'Caquetá'],
            /*08*/ ['dane'=> '19', 'name'=> 'Cauca'],
            /*09*/ ['dane'=> '20', 'name'=> 'Cesar'],
            /*10*/ ['dane'=> '23', 'name'=> 'Córdoba'],
            /*11*/ ['dane'=> '25', 'name'=> 'Cundinamarca'],
            /*12*/ ['dane'=> '27', 'name'=> 'Chocó'],
            /*13*/ ['dane'=> '41', 'name'=> 'Huila'],
            /*14*/ ['dane'=> '44', 'name'=> 'La Guajira'],
            /*15*/ ['dane'=> '47', 'name'=> 'Magdalena'],
            /*16*/ ['dane'=> '50', 'name'=> 'Meta'],
            /*17*/ ['dane'=> '52', 'name'=> 'Nariño'],
            /*18*/ ['dane'=> '54', 'name'=> 'Norte de Santander'],
            /*19*/ ['dane'=> '63', 'name'=> 'Quindio'],
            /*20*/ ['dane'=> '66', 'name'=> 'Risaralda'],
            /*21*/ ['dane'=> '68', 'name'=> 'Santander'],
            /*22*/ ['dane'=> '70', 'name'=> 'Sucre'],
            /*23*/ ['dane'=> '73', 'name'=> 'Tolima'],
            /*24*/ ['dane'=> '76', 'name'=> 'Valle del Cauca'],
            /*25*/ ['dane'=> '81', 'name'=> 'Arauca'],
            /*26*/ ['dane'=> '85', 'name'=> 'Casanare'],
            /*27*/ ['dane'=> '86', 'name'=> 'Putumayo'],
            /*28*/ ['dane'=> '88', 'name'=> 'Archipiélago de  San Aandrés, Provincia y Santa Catalina'],
            /*29*/ ['dane'=> '91', 'name'=> 'Amazonas'],
            /*30*/ ['dane'=> '94', 'name'=> 'Guanía'],
            /*31*/ ['dane'=> '95', 'name'=> 'Guaviare'],
            /*32*/ ['dane'=> '97', 'name'=> 'Vaupés'],
            /*33*/ ['dane'=> '99', 'name'=> 'Vichada'],
            /*34*/ ['dane'=> '00', 'name'=> 'Otro']
        );

        foreach ($departments as $deparment) {
            Department::updateOrCreate($deparment);
        }
    }
}
