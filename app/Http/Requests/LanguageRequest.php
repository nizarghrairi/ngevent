<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
            'name'=>'required|string:max:100',
            'abbr'=>'required|string:max:10',
            //'active'=>'required|in:0,1',
            'direction'=>'required|in:rtl,ltr',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est requis',
            'in' => 'Les valeurs saisies ne sont pas valides ',
            'name.string' => 'Le nom de la langue doit être des lettres',
            'abbr.max' => 'Ce champ ne doit pas dépasser 10 caractères ',
            'abbr.string' => 'Ce champ doit être une lettre',
            'name.max' => 'Le nom de la langue ne doit pas dépasser 100 caractères ',
        ];
    }
}
