<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncargadoRequest extends FormRequest
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
			'dpi' => 'required|string',
			'nombre1' => 'required|string',
			'nombre2' => 'required|string',
			'nombre3' => 'required|string',
			'apellido1' => 'required|string',
			'apellido2' => 'required|string',
			'fecha_nac' => 'required',
			'tel1' => 'required|string',
			'tel2' => 'required|string',
			'direcc' => 'required|string',
        ];
    }
}
