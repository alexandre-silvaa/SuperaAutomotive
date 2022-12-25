<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManutencaoRequest extends FormRequest
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
            'tipo_manutencao_id'    => "required | exists:tipos_manutencao,id",
            'user_id'               => "exists:users,id",
            'carro_id'              => "required | exists:carros,id",
            'valor'                 => "required | numeric",
            'data'                  => "required |date",
            'observacao'            => "nullable | max:200",
            
        ];
    }

    public function messages()
    {
        return [
            'tipo_manutencao_id.exists'     => "Tipo de manutenção inválido",
            'tipo_manutencao_id.required'   => "Obrigatório indicar um tipo de manutenção",
            'carro_id.exists'               => "Carro inválido",
            'carro_id.required'             => "Obrigatório indicar um carro",
            'valor.required'                => "Valor obrigatório",
            'valor.numeric'                 => "Valor precisa ser um número",
            'data.required'                 => "Data obrigatória",
        ];
    }

    public function validationData()
    {
        $data = $this->all();

        $data['observacao']     = strtoupper($data['observacao']);
        $data['valor']          = str_replace([','],['.'], $data['valor']);
        $this->replace($data);

        return $data;
    }
}
