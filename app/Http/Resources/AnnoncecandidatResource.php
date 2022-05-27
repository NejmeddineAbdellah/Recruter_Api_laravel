<?php

namespace App\Http\Resources;

use App\Models\Candidat;
use App\Models\Secteur;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnoncecandidatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id'=>$this->id,
            'titre_annonce' => $this->titre_annonce,
            'description_annonce' => $this->description_annonce,
            'profile_rechercher' => $this->profile_rechercher,
            'niveau_etude' => $this->niveau_etude,
            'secteur_activite_candidat'=>Secteur::find($this->secteur_activite_candidat)->titre_secteur,
            'id_candidat'=>Candidat::find($this->id_candidat)->nom_candidat,
            "tele_candidat"=>$this->tele_candidat

        ];
        return parent::toArray($request);
    }
}
