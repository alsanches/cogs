<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProceduresValidation extends FormRequest
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
            'name' => 'required|min:5',
            'value' => 'required|min:3',
            'collabValue' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É necessário informar o nome do procedimento odontológico.',
            'name.min' => 'O nome do procedimento odontológico deve ter pelo menos 5 caracteres.',
            'value.required' => 'É necessário informar o valor base de cálculo deste procedimento odontológico.',
            'value.min' => 'O valor do procedimento deve ter pelo menos 3 caracteres.',
            'collabValue.required' => 'É necessário informar o valor a ser pago para o colaborador referente a este procedimento odontológico.',
            'collabValue.min' => 'O valor do procedimento deve ter pelo menos 3 caracteres.',
        ];
    }


}
