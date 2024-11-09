<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentescoRequest extends FormRequest
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
			'alumno_fk' => 'required',
			'encargado_fk' => 'required',
			'tipo_parentesco' => 'required|string',
			'prioridad' => 'required|string',
        ];
    }
}
