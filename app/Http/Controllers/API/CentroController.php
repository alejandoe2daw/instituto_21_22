<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;
use App\Http\Resources\CentroResource;


class CentroController extends Controller {

    public function index() {
        return Centro::paginate();
    }

    public function store(Request $request) {
        $centro = json_decode($request->getContent(), true);
        $centro = Centro::create($centro);
        return new CentroResource($centro);
    }

    public function show(Centro $centro) {
        return new CentroResource($centro);
    }

    public function update(Request $request, Centro $centro) {
        $centroData = json_decode($request->getContent(), true);
        $centro->update($centroData);
        return new CentroResource($centro);
    }

    public function destroy(Centro $centro) {
        $centro->delete();
    }
}
