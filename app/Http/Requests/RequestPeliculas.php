<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPeliculas extends FormRequest
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return[
            'nombre' => 'nombre de peliculas',
            'descripcion' => 'descripcion de peliculas',
            'categoria' => 'categoria de peliculas',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Campo esta vacio'
        ];
    }
}
