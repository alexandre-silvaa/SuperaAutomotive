<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email'         => "required | exists:users,email",
            'password'      => "required",
        ];
    }

    public function messages()
    {
        return [
            'email.required'      => "Digite um email",   
            'email.exists'        => "Digite um email válido",   
            'password.required'   => "Digite uma senha",
        ];
    }
}