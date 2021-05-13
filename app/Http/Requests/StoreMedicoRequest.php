<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
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
            'nombre' => ['required', 'string', 'min:10', 'max:255'],
            'numero_id' => ['required', 'numeric', 'unique:medicos'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:medicos'],
            'contrasena' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    
    public function attributes()
    {
        return [
            'nombre' => 'Nombre',
            'numero_id' => 'Num Identidad',
            'correo' => 'Correo',
            'contrasena' => 'Contraseña',
        ];
    }
}
