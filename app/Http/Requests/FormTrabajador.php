<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTrabajador extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST': {
                return 
                [
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'dni' => 'required|digits:8',
                    'email' => 'email|required|unique:users,email',
                ];
            }
            case 'PUT': {
                return 
                [   
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'dni' => 'required|digits:8',
                    /*'email' => 'required|unique:users,email,'.$this->route('trabajador'),*/
                ];
            }
        }
    }
}
