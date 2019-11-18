<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientsValidation extends FormRequest
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
            'cpf' => 'required|cpf|unique:patients,cpf,' . $this->route('id')
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É necessário informar o nome do paciente.',
            'name.min' => 'O nome do paciente deve ter pelo menos 5 caracteres.',
            'cpf.required' => 'É necessário informar o CPF do paciente.',
            'cpf.cpf' => 'O número informado não é um CPF válido.',
            'cpf.unique' => 'Esse CPF pertence a outro Paciente.'
        ];
    }
}
