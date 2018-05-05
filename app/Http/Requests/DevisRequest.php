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
            'code_postal'      => 'required',
            'type_appartement' => 'required',
            'nombre_pieces'    => 'required|min:2',
            'prestations'      => 'required',
            'message'          => 'required',
            'surface'          => 'required|min:6'
        ];
    }
}
