<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnoncecandidatRequest extends FormRequest
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
            'secteur_activite_candidat'=>'required',
            'id_candidat'=>'required',
            'tele_candidat'=>'required'
        ];
    }
}
