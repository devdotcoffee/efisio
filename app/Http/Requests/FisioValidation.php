<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FisioValidation extends FormRequest
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
            'fisioNome' => 'required',
            'fisioNascimento' => 'required',
            'fisioCpf' => 'required',
            'fisioCrefito' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'fisioNome.required' => 'O nome é obrigatório',
            'fisioNascimento.required' => 'A data de nascimento é obrigatória',
            'fisioCpf.required' => 'O CPF é obrigatório',
            'fisioCrefito.required' => 'O n° CREFITO é obrigatório'
        ];
    }
}
