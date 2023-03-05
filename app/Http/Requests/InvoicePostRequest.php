<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoicePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'client' => 'required|max:255',
            'ref' => 'required',
            'title' => 'required|max:255',
            'goal' => 'required',
            'tva' => 'required|numeric',
            'amount' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'client.required' => 'Le nom du client est obligatoire',
            'client.max' => 'Le nom ne peut pas deppasser les 255 charactere',
            'ref.required' => 'La reference est obligatoir',
            'title.required' => 'Le titre est obligatoire',
            'title.max' => 'Le titre ne peut pas depasser les 255 charactere',
            'goal.required' => 'Il faut founir une raison pour la facture',
            'tva.required' => 'La tva est obligatoire',
            'tva.numeric' => 'La tva doit etre un nombre',
            'amount.required' => 'La montant est obligatoire',
            'amount.numeric' => 'Calculer avec des lettre sera difficile...'
        ];
    }
}
