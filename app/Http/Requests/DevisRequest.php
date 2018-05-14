<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevisRequest extends FormRequest
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
            'code_postal'      => 'required|numeric',
            'type_appartement' => 'required',
            'prestations'      => 'required',
            'surface'          => 'required|numeric',
            'telephone'        => ['regex:/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/'],
            'email'            => 'required|email',
            'message'          => 'nullable|min:10|max:300'
        ];
    }
}
