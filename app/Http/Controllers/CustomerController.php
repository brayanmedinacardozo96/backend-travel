<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getData()
    {
        try {
            $result = Customer::all();
            return response()->json($result);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        };
    }

    public function postCustumer(Request $request)
    {

        $response = ["message" => "Registro realizado con éxito.", "data" => "", "status" => 200];
        try {

            $obj = new Customer();
            $obj->nombres = $request->nombres;
            $obj->telefono = $request->telefono;
            $obj->correo = $request->correo;
            $obj->direccion = $request->direccion;
            $obj->plan = $request->plan;
        } catch (\Throwable $th) {
            $response = ["message" => "Inconvenientes al realizar el registro.", "data" => "Error: " . $th->getMessage() . " - Línea: " . $th->getLine(), "status" => 400];
        }

        return response()->json($response, $response['status']);
    }
}
