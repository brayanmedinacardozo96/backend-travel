<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;


class ReportController extends Controller
{
    public function getReportGeneral(Request $request)
    {
        $response = ["message" => "Registro realizado con éxito.", "data" => "", "count" => 0, "status" => 200];
        try {

            $person =  Person::select(
                'persons.*',
                DB::raw('genders.name AS genero'),
                DB::raw('diversities.name AS diversidad'),
                DB::raw('vulnerabilities.name AS vulnerabilidad'),
            )
                ->leftJoin('genders', 'persons.gender_id', '=', 'genders.id')
                ->leftJoin('diversities', 'persons.diversity_id', '=', 'diversities.id')
                ->leftJoin('vulnerabilities', 'persons.vulnerability_id', '=', 'vulnerabilities.id');

            if ($request->genders != "") {
                $person = $person->where('gender_id', $request->genders);
            }

            if ($request->commune != "") {
                $person = $person->where('othercommuna', $request->commune);
            }

            if ($request->group_sisben != "") {
                $person = $person->where('sisben', $request->group_sisben);
            }

            if ($request->group_sisben != "") {
                $person = $person->whereBetween(DB::raw('year(NOW())- year(birthdate)'), [$request->edad_inicial, $request->edad_final]);
            }

            if ($request->limit != 0) {
                $person =  $person->skip($request->offset)->take($request->limit);
            }

            $response['data'] = $person->get();
            $response['count'] = $person->count();
        } catch (\Throwable $th) {
            $response = ["message" => "Inconvenientes al realizar el registro.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return  $response;
    }

    public function getUbicacion()
    {
        $response = ["message" => "Registro realizado con éxito.", "data" => "", "count" => 0, "status" => 200];

        try {

            $person =  Person::whereNotNull("commercial_location")->get();
            $response['data'] =   $person;
        } catch (\Throwable $th) {
            $response = ["message" => "Inconvenientes al realizar la consulta.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return  $response;
    }
}
