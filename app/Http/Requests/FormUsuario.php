<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUsuario extends FormRequest
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
                    'email' => 'email|required|unique:users,email',
                    'password' => 'required|confirmed',
                    'roles' => 'required'
                ];
            }
            case 'PUT': {
                return 
                [   
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'email' => 'required|unique:users,email,'.$this->route('usuario'),
                    'roles' => 'required'
                ];
            }
        }
    }
}
