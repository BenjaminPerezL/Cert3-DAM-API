<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventosRequest extends FormRequest
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
            'id_evento' => 'required|unique:eventos,id_evento',
            'nombre_evento' => 'required',
            'estado_evento' => 'required',
            'entradas_vendidas' => 'required',
        ];
    }
    public function messages(){
        return [
            'id_evento.required' => 'Ingrese el id del evento',
            'id_evento.unique' => 'El id ya esta tomado, ingrese otro',
            'nombre_evento.required' => 'Ingrese el nombre del evento',
            'estado_evento.required' => 'Elija el estado del evento',
            'entradas_vendidas.required' => 'Coloque las entradas vendidas del evento',
        ];
    }
}
