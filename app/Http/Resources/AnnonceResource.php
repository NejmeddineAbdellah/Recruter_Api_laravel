<?php

namespace App\Http\Resources;

use App\Models\Secteur;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnonceResource extends JsonResource
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
            'contrat' => $this->contrat,
            'salaire' => $this->salaire,
            'secteur_id' =>Secteur::find($this->secteur_id)->titre_secteur
           
        ];
        return parent::toArray($request);
    }
}
