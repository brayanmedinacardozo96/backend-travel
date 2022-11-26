<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function save(Request $request)
    {
        $response = ["message" => "Registro realizado con éxito.", "data" => "", "status" => 200];
        try {


            $person = new Person();
            $person->typedocument_id = $request->typedocument_id;
            $person->NUMBER = $request->number;
            $person->names = $request->names;
            $person->surnames = $request->surnames;
            $person->birthdate = $request->birthdate;
            $person->address = $request->address;
            $person->district = $request->district;
            $person->sex = $request->sex;
            $person->gender_id = $request->gender_id;
            $person->diversity_id = $request->diversity_id;
            $person->vulnerability_id = $request->vulnerability_id;
            $person->ethnicgroup_id = $request->ethnicgroup_id;
            $person->educationlevel_id = $request->educationlevel_id;
            $person->disability_id = $request->diversity_id;
            $person->otherdiversity = $request->otherdiversity;
            $person->email = $request->email;
            $person->phone = $request->phone;
            $person->municipality_id = $request->municipality_id;
            $person->department_id = $request->department_id;
            $person->state = 1;
            $person->commercial_location = json_encode($request->location);
            $person->communa_id = $request->commune;
            $person->othercommuna = $request->othercommuna;
            $person->sisben = $request->sisben;
            $person->group_people = $request->group_people;

            $person->commercial_address = $request->commercial['address'];
            $person->commercial_commune = $request->commercial['commune'];
            $person->commercial_company = isset($request->commercial['company']) ? $request->commercial['company'] : "";
            $person->commercial_department = $request->commercial['department'];
            $person->commercial_district = $request->commercial['district'];
            $person->commercial_municipality = $request->commercial['municipality'];
            $person->commercial_neighborhood = $request->commercial['neighborhood'];
            $person->commercial_product = $request->commercial['product_json'];
            $person->working_day = $request->commercial['working_day'];
            $person->education_level_description = $request->education_level_description;
            $person->workforce = $request->workforce;
            $person->dependents = $request->dependents;

            $person->save();
        } catch (\Throwable $th) {
            $response = ["message" => "Inconvenientes al realizar el registro.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return response()->json($response, $response['status']);
    }

    public function select(Request $request)
    {
        $response = ["message" => "", "data" => "", "count" => 0, "status" => 200];

        try {

            $count =  Person::count();

            $person =  Person::select('persons.*', DB::raw('type_documents.description AS typedocument'))
                ->join('type_documents', 'type_documents.id', '=', 'persons.typedocument_id');

            if ($request->offset != null) {
                $person =  $person->skip($request->offset)->take($request->limit);
            } else {
                $person =  $person->where(DB::raw("CONCAT(NUMBER,' ',names,' ',surnames)"), 'LIKE', "%$request->name%");
            }

            $person = $person->get();

            $response['data'] = $person;
            $response['count'] = $count;
        } catch (\Throwable $th) {
            $response = ["message" => "Error al consultar.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return response()->json($response, $response['status']);
    }

    public function selectOne(Request $request)
    {

        $response = ["message" => "", "data" => "", "count" => 0, "status" => 200];

        try {

            $person =  Person::select('persons.*', DB::raw('type_documents.description AS typedocument'))
                ->join('type_documents', 'type_documents.id', '=', 'persons.typedocument_id')
                ->where('type_documents.id', $request->typedocument)
                ->where('persons.number', $request->identification)
                ->get();

            $response['data'] = $person;
        } catch (\Throwable $th) {
            $response = ["message" => "Error al consultar.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return response()->json($response, $response['status']);
    }
}
