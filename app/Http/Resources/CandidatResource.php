<?php

namespace App\Http\Resources;

use App\Models\Secteur;
use Illuminate\Http\Resources\Json\JsonResource;

class CandidatResource extends JsonResource
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
            'nom_candidat' => $this->nom_candidat,
            'prenom_candidat' => $this->prenom_candidat,
            'image_candidat' => $this->image_candidat,
            'niveau_etude' => $this->niveau_etude,
            'secteur_activite' =>Secteur::find($this->secteur_id)->titre_secteur,
            'cv_candidat' => $this->cv_candidat
           
        ];

        return parent::toArray($request);
    }
}
