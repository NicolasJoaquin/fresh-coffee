<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password as PasswordRules;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers(),
            ],
        ];
    }
    public function messages() {
        return [
            'name.required' => 'El Nombre es obligatorio',
            'email.required' => 'El Email es obligatorio',
            'email.email' => 'Ingresá un Email válido',
            'email.unique' => 'Ya existe un usuario con este Email',
            'password.required' => 'El Password es obligatorio',
            'password.confirmed' => 'El Password y su confirmación no coinciden',
            'password.min' => 'El Password debe tener al menos 8 caracteres',
            'password.letters' => 'El Password debe contener al menos una letra',
            'password.symbols' => 'El Password debe contener al menos un símbolo',
            'password.numbers' => 'El Password debe contener al menos un número',
        ];
    }
}
