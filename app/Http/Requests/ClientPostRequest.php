<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientPostRequest extends FormRequest
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
           'name' => 'required|max:255',
           'address' => 'required|regex:/(?:\s*[a-zA-Z0-9]{2,}\s*)*/',
           'phoneNumber' => 'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
           'email' => 'required|email',
           'tva' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
           'name.max' => 'Le nome ne peut pas deppaser les 255 charactere',
           'name.required' => 'Vous avez oublie d\'indiquer le nom du client',
           'address.required' => 'Hmmm un client sans address bizare...',
           'address.regex' => 'L\'address doit contenir des lettres et des chiffres',
           'phoneNumber.required' => 'Avec un numero de telephone sa sera mieux...',
           'phoneNumber.regex' => 'Oops le numero de le telephone n\'est pas valid',
           'email.required' => 'Vous avez oublier d\'encoder l\'address mail',
           'email.email' => 'Veuillez entrer une address mail valid',
           'tva.required' => 'Il manque le numero de tva',
           'tva.regex' => 'Veuillez entrer un numero de tva valid',
        ];
    }
}

