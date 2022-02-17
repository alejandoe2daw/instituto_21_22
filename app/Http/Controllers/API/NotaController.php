<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotaResource;
use App\Models\Nota;
use App\Models\User;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Nota::factory(20)->create();
        return NotaResource::collection(Nota::paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Nota::class); /* Error 405 no 403 REVISAR */
        $nota = json_decode($request->getContent(), true);
        $nota = nota::create($nota);
        return new NotaResource($nota);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        return new NotaResource($nota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        $this->authorize('update', $nota);
        $notaData = json_decode($request->getContent(), true);
        $nota->update($notaData);
        return new NotaResource($nota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $this->authorize('delete', $nota);
        $nota->delete();
    }
    public function media($materia_id, Nota $nota){
        $materias = $nota->conseguirMaterias($materia_id);
        $cont=0;
        $suma=0;
        foreach($materias as $materia){
            $cont++;
            $notas = $materia->nota;
            $suma += $notas;
        }
        return 'La media es => '.$suma/$cont;
    }
}
