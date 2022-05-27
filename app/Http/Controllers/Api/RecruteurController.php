<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recruteur;
use App\Http\Requests\StoreRecruteurRequest;
use App\Http\Requests\UpdateRecruteurRequest;
use App\Http\Resources\RecruteurResource;
use Illuminate\Support\Facades\DB;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RecruteurResource::collection(Recruteur::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecruteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecruteurRequest $request)
    {   
        return Recruteur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function show($recruteur)
    {
        //return Recruteur::findOrFail($recruteur);

        return Recruteur::find($recruteur);
        //return DB::table("Recruteurs")->whereIn('id',$recruteur)->get()->first();
        // return RecruteurResource::collection(Recruteur::where('id', $recruteur)->first());
        // return response()->json([
        //     'data' => Recruteur::where('id', $recruteur)->first()
        // ]);
             
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruteur $recruteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecruteurRequest  $request
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecruteurRequest $request, Recruteur $recruteur)
    {
        // $rec=Recruteur::find($recruteur);
        // $rec->update($request->all());
        // return $rec;

        $recruteur->fill($request->post())->update();

        return response()->json([
            'message' => 'Recruteur modified !'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruteur $recruteur)
    {
        $recruteur->delete();

        return response()->json([
            'message' => 'Recruteur Destroyed!'
        ]);
    }
}
