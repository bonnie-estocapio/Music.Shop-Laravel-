<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|regex:/^[a-zA-Z0-9_]{3,20}$/',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'fullName' => 'required|regex:/^[a-zA-Z ]+$/',
            'address' => 'required|regex:/^[a-zA-Z0-9_ ]+, [a-zA-Z ]+, [a-zA-Z ]+, [a-zA-Z ]+$/',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'username.regex' => 'Username invalid.',
            'password.regex' => 'Password invalid.',
            'fullName.regex' => 'Full Name invalid.',
            'address.regex' => 'Address invalid',
        ];
    }
}