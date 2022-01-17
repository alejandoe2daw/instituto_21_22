<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Nivel;
use App\Http\Resources\NivelResource;
use Illuminate\Http\Request;

class NivelController extends Controller {
    public function index() {
        return NivelResource::collection(Nivel::paginate());
    }

    public function store(Request $request) {
        $Nivel = json_decode($request->getContent(), true);

        $Nivel = Nivel::create($Nivel);

        return new NivelResource($Nivel);
    }

    public function show(Nivel $Nivel)  {
        return new NivelResource($Nivel);
    }

    public function update(Request $request, Nivel $Nivel) {
        $NivelData = json_decode($request->getContent(), true);
        $Nivel->update($NivelData);

        return new NivelResource($Nivel);
    }

    public function destroy(Nivel $Nivel) {
        $Nivel->delete();
    }
}
