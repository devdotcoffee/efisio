<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvolucaoValidation extends FormRequest
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
            'evolucaoData' => 'required',
            'evolucaoDescricao' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'evolucaoData.required' => 'A data é obrigatória',
            'evolucaoDescricao.required' => 'A descrição é obrigatória'
        ];
    }
}
