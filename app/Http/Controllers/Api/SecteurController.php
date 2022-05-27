<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Secteur;
use App\Http\Requests\StoreSecteurRequest;
use App\Http\Requests\UpdateSecteurRequest;
use App\Http\Resources\SecteurResource;
use GuzzleHttp\Psr7\Request;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SecteurResource::collection(Secteur::all());
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
     * @param  \App\Http\Requests\StoreSecteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecteurRequest $request)
    {

        Secteur::create($request->validated());

     return SecteurResource::collection(Secteur::find($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function show(Secteur $secteur)
    {
        return SecteurResource::collection(Secteur::find($secteur));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Secteur $secteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecteurRequest  $request
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */


    public function update(UpdateSecteurRequest $request, Secteur $secteur)
    {

        $secteur->fill($request->post())->update();

        return response()->json([
            'message' => 'Secteur modified !'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secteur $secteur)
    {
        $secteur->delete();

        return response()->noContent();       
    }
}
