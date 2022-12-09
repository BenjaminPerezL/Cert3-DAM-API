<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradasRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'numero_entrada' => 'required|unique:entradas,numero_entrada',
            'nombre_cliente' => 'required',
            'informacion_evento' => 'required',
            'evento_id' => 'required',
            
        ];
    }
    public function messages(){
        return [
            'numero_entrada.required' => 'Ingrese el numero de entrada',
            'numero_entrada.unique' => 'El numero ya esta tomado, ingrese otro',
            'nombre_cliente.required' => 'Ingrese el nombre del cliente',
            'informacion_evento.required' => 'Infrese la informacion del evento',
            
        ];
    }
}
