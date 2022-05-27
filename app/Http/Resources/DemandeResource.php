<?php

namespace App\Http\Resources;

use App\Models\Annonce;
use App\Models\Candidat;
use Illuminate\Http\Resources\Json\JsonResource;

class DemandeResource extends JsonResource
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
            'id_candidat' =>Candidat::find($this->id_candidat)->nom_candidat,
            'id_annonce' =>Annonce::find($this->id_annonce)->titre_annonce,
            'lettre_motivation' => $this->lettre_motivation,
            'cv_candidat'=>Candidat::find($this->id_candidat)->cv_candidat

        ];

        return parent::toArray($request);
    }
}
