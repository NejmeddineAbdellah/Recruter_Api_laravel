<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Annoncecandidat;
use App\Http\Requests\StoreAnnoncecandidatRequest;
use App\Http\Requests\UpdateAnnoncecandidatRequest;
use App\Http\Resources\AnnoncecandidatResource;

class AnnoncecandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return AnnoncecandidatResource::collection(Annoncecandidat::all()); 
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
     * @param  \App\Http\Requests\StoreAnnoncecandidatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnnoncecandidatRequest $request)
    {
        Annoncecandidat::create($request->validated());

        return response()->json([
            'message' => 'add successfuly ! '
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annoncecandidat  $annoncecandidat
     * @return \Illuminate\Http\Response
     */
    public function show($annoncecandidat)
    {
        return Annoncecandidat::find($annoncecandidat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annoncecandidat  $annoncecandidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Annoncecandidat $annoncecandidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnoncecandidatRequest  $request
     * @param  \App\Models\Annoncecandidat  $annoncecandidat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnoncecandidatRequest $request, Annoncecandidat $annoncecandidat)
    {
        $annoncecandidat->fill($request->post())->update();

        return response()->json([
            'message'=> ' Annonce candidat updated !'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annoncecandidat  $annoncecandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annoncecandidat $annoncecandidat)
    {
        $annoncecandidat->delete();

        return response()->json([
            'message' => 'Annonce candidat has been deleted! '
        ]);
    }
}
