<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public static $rules = [
            
        'name'          => "required | string | max:255",
        'email'         => "required | string | email | max:255 | unique:users,email",
        'password'      => "required | string | min:8 | confirmed",

    ];

    public function rules(): array
    {
        return self::$rules;
    }

    public function messages()
    {
        return [
            'name.required'       => "Digite um nome",   
            'email.required'      => "Digite um email",   
            'email.exists'        => "Email já cadastrado",   
            'password.required'   => "Digite uma senha",
        ];
    }
}
