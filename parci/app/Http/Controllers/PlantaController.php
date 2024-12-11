<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationPlantasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Planta;


class PlantaController extends Controller
{
    public function show()
   {
        return Planta::all();
    }

    public function showById($id)
    {
        return Planta::find($id);
    }

    public function delete($id)
    {
        try{            
            Planta::destroy($id);
            return response()->json(["message" => "eliminacion existosa"]);
        } catch(Exeption $e){
            return response()->json(["messege" => "error al eliminar"]);
        }
    }
    public function edit(ValidationPlantasRequest $request, $id)
    {
        $planta = Planta::find($id);
        $planta->nombre = $request->nombre;
        $planta->altura = $request->altura;
        $planta->tipo = $request->tipo;
        $planta->riego = $request->riego;
        $planta->estado = $request->estado;
        $planta->precio = $request->precio;
        $planta->save();
        return response()->json(["message" => "Actualización exitosa"]);
    }
    public function store(ValidationPlantasRequest $request)
    {
        try {
            $planta = new Planta;
            $planta->nombre = $request->nombre;
            $planta->altura = $request->altura;
            $planta->tipo = $request->tipo;
            $planta->riego = $request->riego;
            $planta->estado = $request->estado;
            $planta->precio = $request->precio;
            $planta->save();
            return response()->json(["message" => "registro existoso"]);
        } catch (Exception $e) {
            return response()->json(["messege" => "error al crear"]);
        }
    }
}