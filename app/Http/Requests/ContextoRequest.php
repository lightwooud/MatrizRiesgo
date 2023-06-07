<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContextoRequest extends FormRequest
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
            'codigo' => 'required|min:1',
            'revision' => 'required|min:1',
            'fecha'=> 'required|min:3',
            'objetivo'=> 'required|min:3',
            'alcance'=> 'required|min:3' ,
            'enfoque'=> 'required|min:3' ,
        ];
    }
}
