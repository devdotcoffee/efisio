<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PacienteValidation extends FormRequest
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
            'pacienteNome'          => 'required',
            'pacienteCpf'           => 'required',
            'pacienteEmail'         => 'required',
            'pacienteNascimento'    => 'required',
            'pacienteTelefone'      => 'required',
            'pacienteSexo'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pacienteNome.required'         => 'É necessário informar o nome do paciente',
            'pacienteCpf.required'          => 'É necessário informar o CPF do paciente',
            'pacienteCpf.unique'            => 'Esse CPF já existe',
            'pacienteEmail.required'        => 'É necessário informar o e-mail do paciente',
            'pacienteNascimento.required'   => 'Informe a data de nasciemnto',
            'pacienteTelefone.required'     => 'Informe o telefone do paciente',
            'pacienteSexo.required'         => 'Informe o sexo do paciente'
        ];
    }
}
