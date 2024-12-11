<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationPlantasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:8',
            'altura' => 'required',
            'tipo' => 'required',
            'riego' => 'required',
            'estado' => 'required ',
            'precio' => 'required | numeric ',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'nombre requerido',
            'nombre.max' => 'maximo 8 caracteres en el nombre',
            'altura.required' => 'altura requerida',
            'tipo.required' => 'tipo requerido',
            'riego.required' => 'riego requerido',
            'estado.required' => 'estado requerido',
            'precio.required' => 'precio requerido',
            'precio.numeric' => 'precio debe ser numero',
        ];
    }
}
