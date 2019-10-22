<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollaboratorsValidation extends FormRequest
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
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'percent' => 'required',
            'parcelPercent' => 'required',
            'email' => 'required|email|unique:collaborators,email,' . $this->route('id')
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'É necessário informar o nome do Colaborador.',
            'name.min' => 'O nome do Colaborador deve ter pelo menos 3 caracteres.',
            'surname.required' => 'É necessário informar o sobrenome do Colaborador.',
            'surname.min' => 'O sobrenome do Colaborador deve ter pelo menos 3 caracteres.',
            'percent' => 'É necessário informar o percentual que o Colaborador ganha por procedimento ou digite 0 para valor fixo.',
            'email.email' => 'O campo E-mail deve conter um endereço de email válido.',
            'email.required' => 'É necessário informar o email do Colaborador.',
            'email.unique' => 'Esse endereço de email já está sendo utilizado por outro Colaborador'
        ];
    }
}
