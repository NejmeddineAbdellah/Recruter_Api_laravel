<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemandeRequest extends FormRequest
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
            'lettre_motivation'=>'required',
            'id_candidat'=>'required|exists:candidats',
            'id_annonce'=>'required|exists:annonces',
            'cv_candidat'=>'nullable',
        ];
    }
}
