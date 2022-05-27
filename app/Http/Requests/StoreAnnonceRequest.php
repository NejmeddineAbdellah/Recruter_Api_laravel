<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnonceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre_annonce'=>'required',
            'description_annonce'=>'required',
            'profile_rechercher'=>'required',
            'niveau_etude'=>'required',
            'contrat'=>'required',
            'salaire'=>'nullable',
            'secteur_id'=>'required'
        ];
    }
}
