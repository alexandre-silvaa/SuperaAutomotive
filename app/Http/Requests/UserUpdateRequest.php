<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        // Pega o id do item, sendo permitindo criar uma regra de exceção e comparação do id a ser editado
        $id = $this->segment(3);
        return [
            'name'              => "required | min:8 | max:100",
            'email'             => "required | email | min:10 | max:255 | unique:users,email,{$id},id",
            'celular'           => "nullable | numeric",
            'password'          => 'nullable | min:5',
            'password2'         => 'nullable | same:password',  
        ];
    }

    public function messages()
    {
        return [
            'name.required'                     => 'O campo nome é de preenchimento obrigatório',
            'name.min'                          => 'O campo nome deve conter no mínimo 8 caracteres',
            'password.min'                      => 'O campo senha deve deve conter no mínimo 5 caracteres',
            'password2.same'                    => 'Valor deve ser o igual ao campo senha',
        ];
    }

    public function validationData()
    {
        $data = $this->all();

        $data['name'] = strtoupper($data['name']);
        $data['email'] = strtoupper($data['email']);

        $this->replace($data);

        return $data;
    }
}
