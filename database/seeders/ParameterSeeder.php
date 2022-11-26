<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parameter;
use App\Models\ParameterDetail;


class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parameter = array(
            ['id' => 1, 'name' => 'Tipo de vivienda', 'code' => 'TPVV', 'state' => 1],
            ['id' => 2, 'name' => 'Servcios Publicos', 'code' => 'SPL', 'state' => 1],
            ['id' => 3, 'name' => 'Sisben', 'code' => 'SBN', 'state' => 1],
            ['id' => 4, 'name' => 'Salario Minimo', 'code' => 'SM', 'state' => 1],
            ['id' => 5, 'name' => 'Grupo de población al que pertenece', 'code' => 'GRP', 'state' => 1],
            ['id' => 6, 'name' => 'Jornada', 'code' => 'JD', 'state' => 1],
        );

        foreach ($parameter as $value) {
            Parameter::updateOrCreate($value);
        }

        $parameterDetail = array(
            //tipo vivienda
            ['id' => 1, 'parameter_id' => 1, 'name' => 'Arriendo', 'code' => 'TPARR', 'state' => 1],
            ['id' => 2, 'parameter_id' => 1, 'name' => 'Casa familiar', 'code' => 'TPCF', 'state' => 1],
            ['id' => 3, 'parameter_id' => 1, 'name' => 'Asentamiento', 'code' => 'TPASE', 'state' => 1],
            ['id' => 4, 'parameter_id' => 1, 'name' => 'Casa Propia', 'code' => 'TPCAS', 'state' => 1],
            ['id' => 5, 'parameter_id' => 1, 'name' => 'Pagando Fondo Nacional del Ahorro', 'code' => 'TPFH', 'state' => 1],
            ['id' => 6, 'parameter_id' => 1, 'name' => 'Invasión', 'code' => 'TPINV', 'state' => 1],
            ['id' => 7, 'parameter_id' => 1, 'name' => 'Lote', 'code' => 'TPLT', 'state' => 1],
            ['id' => 8, 'parameter_id' => 1, 'name' => 'Hipoteca', 'code' => 'TPHP', 'state' => 1],
            //servicios publicos
            ['id' => 9, 'parameter_id' => 2, 'name' => 'Acueducto', 'code' => 'SPACU', 'state' => 1],
            ['id' => 10, 'parameter_id' => 2, 'name' => 'Alcantarillado', 'code' => 'SPALC', 'state' => 1],
            ['id' => 11, 'parameter_id' => 2, 'name' => 'Gas', 'code' => 'SPGAS', 'state' => 1],
            ['id' => 12, 'parameter_id' => 2, 'name' => 'Energía Eléctrica', 'code' => 'SPEN', 'state' => 1],
            ['id' => 13, 'parameter_id' => 2, 'name' => 'Telefonía fija o celular', 'code' => 'SPTEL', 'state' => 1],
            ['id' => 14, 'parameter_id' => 2, 'name' => 'Tv', 'code' => 'SPTV', 'state' => 1],
            ['id' => 15, 'parameter_id' => 2, 'name' => 'Todos los anteriores', 'code' => 'SPTD', 'state' => 1],
            //sisben
            ['id' => 16, 'parameter_id' => 3, 'name' => 'A1', 'code' => 'A1', 'state' => 1],
            ['id' => 17, 'parameter_id' => 3, 'name' => 'A2', 'code' => 'A2', 'state' => 1],
            ['id' => 18, 'parameter_id' => 3, 'name' => 'A3', 'code' => 'A3', 'state' => 1],
            ['id' => 19, 'parameter_id' => 3, 'name' => 'A4', 'code' => 'A4', 'state' => 1],
            ['id' => 20, 'parameter_id' => 3, 'name' => 'A5', 'code' => 'A5', 'state' => 1],
            ['id' => 21, 'parameter_id' => 3, 'name' => 'B1', 'code' => 'B1', 'state' => 1],
            ['id' => 22, 'parameter_id' => 3, 'name' => 'B2', 'code' => 'B2', 'state' => 1],
            ['id' => 23, 'parameter_id' => 3, 'name' => 'B3', 'code' => 'B3', 'state' => 1],
            ['id' => 24, 'parameter_id' => 3, 'name' => 'B4', 'code' => 'B4', 'state' => 1],
            ['id' => 25, 'parameter_id' => 3, 'name' => 'B5', 'code' => 'B5', 'state' => 1],
            ['id' => 26, 'parameter_id' => 3, 'name' => 'B6', 'code' => 'B6', 'state' => 1],
            ['id' => 27, 'parameter_id' => 3, 'name' => 'B7', 'code' => 'B7', 'state' => 1],
            ['id' => 28, 'parameter_id' => 3, 'name' => 'C1', 'code' => 'C1', 'state' => 1],
            ['id' => 29, 'parameter_id' => 3, 'name' => 'C2', 'code' => 'C2', 'state' => 1],
            ['id' => 30, 'parameter_id' => 3, 'name' => 'C3', 'code' => 'C3', 'state' => 1],
            ['id' => 31, 'parameter_id' => 3, 'name' => 'C4', 'code' => 'C4', 'state' => 1],
            ['id' => 32, 'parameter_id' => 3, 'name' => 'C5', 'code' => 'C5', 'state' => 1],
            ['id' => 33, 'parameter_id' => 3, 'name' => 'C6', 'code' => 'C6', 'state' => 1],
            ['id' => 34, 'parameter_id' => 3, 'name' => 'C7', 'code' => 'C7', 'state' => 1],
            ['id' => 35, 'parameter_id' => 3, 'name' => 'C8', 'code' => 'C8', 'state' => 1],
            ['id' => 36, 'parameter_id' => 3, 'name' => 'C9', 'code' => 'C9', 'state' => 1],
            ['id' => 37, 'parameter_id' => 3, 'name' => 'C10', 'code' => 'C10', 'state' => 1],
            ['id' => 38, 'parameter_id' => 3, 'name' => 'C11', 'code' => 'C11', 'state' => 1],
            ['id' => 39, 'parameter_id' => 3, 'name' => 'C12', 'code' => 'C12', 'state' => 1],
            ['id' => 40, 'parameter_id' => 3, 'name' => 'C13', 'code' => 'C13', 'state' => 1],
            ['id' => 41, 'parameter_id' => 3, 'name' => 'C14', 'code' => 'C14', 'state' => 1],
            ['id' => 42, 'parameter_id' => 3, 'name' => 'C15', 'code' => 'C15', 'state' => 1],
            ['id' => 43, 'parameter_id' => 3, 'name' => 'C16', 'code' => 'C16', 'state' => 1],
            ['id' => 44, 'parameter_id' => 3, 'name' => 'C17', 'code' => 'C17', 'state' => 1],
            ['id' => 45, 'parameter_id' => 3, 'name' => 'C18', 'code' => 'C18', 'state' => 1],
            ['id' => 46, 'parameter_id' => 3, 'name' => 'D1', 'code' => 'D1', 'state' => 1],
            ['id' => 47, 'parameter_id' => 3, 'name' => 'D2', 'code' => 'D2', 'state' => 1],
            ['id' => 48, 'parameter_id' => 3, 'name' => 'D3', 'code' => 'D3', 'state' => 1],
            ['id' => 49, 'parameter_id' => 3, 'name' => 'D4', 'code' => 'D4', 'state' => 1],
            ['id' => 50, 'parameter_id' => 3, 'name' => 'D5', 'code' => 'D5', 'state' => 1],
            ['id' => 51, 'parameter_id' => 3, 'name' => 'D6', 'code' => 'D6', 'state' => 1],
            ['id' => 52, 'parameter_id' => 3, 'name' => 'D7', 'code' => 'D7', 'state' => 1],
            ['id' => 53, 'parameter_id' => 3, 'name' => 'D8', 'code' => 'D8', 'state' => 1],
            ['id' => 54, 'parameter_id' => 3, 'name' => 'D9', 'code' => 'D9', 'state' => 1],
            ['id' => 55, 'parameter_id' => 3, 'name' => 'D10', 'code' => 'D10', 'state' => 1],
            ['id' => 56, 'parameter_id' => 3, 'name' => 'D11', 'code' => 'D11', 'state' => 1],
            ['id' => 57, 'parameter_id' => 3, 'name' => 'D12', 'code' => 'D12', 'state' => 1],
            ['id' => 58, 'parameter_id' => 3, 'name' => 'D13', 'code' => 'D13', 'state' => 1],
            ['id' => 59, 'parameter_id' => 3, 'name' => 'D14', 'code' => 'D14', 'state' => 1],
            ['id' => 60, 'parameter_id' => 3, 'name' => 'D15', 'code' => 'D15', 'state' => 1],
            ['id' => 61, 'parameter_id' => 3, 'name' => 'D16', 'code' => 'D16', 'state' => 1],
            ['id' => 62, 'parameter_id' => 3, 'name' => 'D17', 'code' => 'D17', 'state' => 1],
            ['id' => 63, 'parameter_id' => 3, 'name' => 'D18', 'code' => 'D18', 'state' => 1],
            ['id' => 64, 'parameter_id' => 3, 'name' => 'D19', 'code' => 'D19', 'state' => 1],
            ['id' => 65, 'parameter_id' => 3, 'name' => 'D20', 'code' => 'D20', 'state' => 1],
            ['id' => 66, 'parameter_id' => 3, 'name' => 'D21', 'code' => 'D21', 'state' => 1],
            //salario
            ['id' => 67, 'parameter_id' => 4, 'name' => 'Menos de 1 SMMLV', 'code' => 'M1SMMLV', 'state' => 1],
            ['id' => 68, 'parameter_id' => 4, 'name' => '1 SMMLV', 'code' => '1SMMLV', 'state' => 1],
            ['id' => 69, 'parameter_id' => 4, 'name' => 'Entre 1 y 2 SMMLV', 'code' => '1_2SMMLV', 'state' => 1],
            //Grupo de población al que pertenece
            ['id' => 70, 'parameter_id' => 5, 'name' => 'Ninguno', 'code' => 'NG', 'state' => 1],
            ['id' => 71, 'parameter_id' => 5, 'name' => 'Adulto Mayor', 'code' => 'ADM', 'state' => 1],
            ['id' => 72, 'parameter_id' => 5, 'name' => 'Discapacidad', 'code' => 'DSP', 'state' => 1],
            ['id' => 73, 'parameter_id' => 5, 'name' => 'Joven', 'code' => 'JVN', 'state' => 1],
            ['id' => 74, 'parameter_id' => 5, 'name' => 'Madre cabeza de familia', 'code' => 'MCF', 'state' => 1],
            ['id' => 75, 'parameter_id' => 5, 'name' => 'Mujer', 'code' => 'MJ', 'state' => 1],
            ['id' => 76, 'parameter_id' => 5, 'name' => 'Padre cabeza de familia', 'code' => 'PCF', 'state' => 1],
            ['id' => 77, 'parameter_id' => 5, 'name' => 'Victimas del conflicto armado', 'code' => 'VIC', 'state' => 1],
            //jornada
            ['id' => 78, 'parameter_id' => 6, 'name' => 'Todo el día', 'code' => 'TDI', 'state' => 1],
            ['id' => 79, 'parameter_id' => 6, 'name' => 'Tarde', 'code' => 'TDE', 'state' => 1],
            ['id' => 80, 'parameter_id' => 6, 'name' => 'Mañana', 'code' => 'MAN', 'state' => 1],
            ['id' => 81, 'parameter_id' => 6, 'name' => 'Noche', 'code' => 'MAN', 'state' => 1],
        );



        foreach ($parameterDetail as $value) {
            ParameterDetail::updateOrCreate($value);
        }
    }
}
