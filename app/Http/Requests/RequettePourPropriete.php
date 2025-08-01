<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequettePourPropriete extends FormRequest
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
            'titre' => 'required|string|min:8',
            'description' => 'required|string`|min:8',
            'surface' => 'required|integer|min:10',
            'salle' => 'required|integer|min:1',
            'prix' => 'required|integer|min:0',
            'ville' => 'required|string|max:100',
            'adresse' => 'required|string|max:100',
            'code_postal' => 'required|string|max:20',
            'disponibilite' => 'boolean',
        ];
    }
}
