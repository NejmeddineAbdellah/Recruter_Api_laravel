<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecruteurRequest extends FormRequest
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
            'username'=> 'required',
            'email' =>'required|unique:recruteurs|email|max:100',
            'password'=>'required|confirmed|',
            'tele'=>'required',
            'logo'=>'nullable',
            'secteur_id'=>'required',

        ];
    }
}
