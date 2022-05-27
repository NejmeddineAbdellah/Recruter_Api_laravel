<?php

namespace App\Http\Resources;

use App\Models\Secteur;
use Illuminate\Http\Resources\Json\JsonResource;

class RecruteurResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'tele' => $this->tele,
            'ville' => $this->ville,
            'logo' => $this->logo,
            'secteur_id' =>Secteur::find($this->secteur_id)->titre_secteur
            
           
        ];
        return parent::toArray($request);
    }
}
