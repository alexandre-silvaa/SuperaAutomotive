<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroRequest extends FormRequest
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
            'nome'          => "required | min:2 | max:60",
            'placa'         => "required | min:2 | max:12 | unique:carros,placa,{$id},id",
            'marca'         => "required | min:2 | max:60",
            'modelo'        => "required | min:2 | max:60",
            'versao'        => "required | min:2 | max:20",
            'ano'           => "required | numeric",
            'user_id'       => "exists:users,id",
        ];
    }

    public function messages()
    {
        return [
            'nome.required'         => "Nome obrigatório",
            'placa.required'        => "Placa obrigatória",
            'placa.unique'          => "Placa já cadastrada",
            'marca.required'        => "Marca obrigatória",
            'modelo.required'       => "Modelo obrigatório",
            'versao.required'       => "Versão obrigatória",
            'ano.required'          => "Ano obrigatório",
            'ano.numeric'           => "Ano precisa ser número",
        ];
    }

    public function validationData()
    {
        $data = $this->all();

        $data['nome']       = strtoupper($data['nome']);
        $data['marca']      = strtoupper($data['marca']);
        $data['modelo']     = strtoupper($data['modelo']);
        $data['versao']     = strtoupper($data['versao']);
        $this->replace($data);

        return $data;
    }
}
