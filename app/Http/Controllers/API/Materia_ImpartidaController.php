<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Materia_Impartida;
use App\Http\Resources\Materia_ImpartidaResource;
use Illuminate\Http\Request;

class Materia_ImpartidaController extends Controller {
    public function index() {
        return Materia_ImpartidaResource::collection(Materia_Impartida::paginate());
    }

    public function store(Request $request) {
        $Materia_Impartida = json_decode($request->getContent(), true);
        $Materia_Impartida = Materia_Impartida::create($Materia_Impartida);
        return new Materia_ImpartidaResource($Materia_Impartida);
    }

    public function show(Materia_Impartida $materia_Impartida) {
        return new Materia_ImpartidaResource($materia_Impartida);
    }

    public function update(Request $request, Materia_Impartida $materia_Impartida) {
        $Materia_ImpartidaData = json_decode($request->getContent(), true);
        $materia_Impartida->update($Materia_ImpartidaData );
        return new Materia_ImpartidaResource($materia_Impartida);
    }

    public function destroy(Materia_Impartida $materia_Impartida) {
        $materia_Impartida->delete();
    }
}
