<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'nome' => 'required|max:35',
            'sobrenome' => 'max:35',
            'telefone' => 'required|min:14|max:16',
            'email' => 'required|email|max:100'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Informe seu nome',
            'nome.max' => 'Seu nome deve possuir no máximo 35 caracteres, utilize o campo sobrenome',
            'sobrenome.max' => 'O campo sobrenome deve possuir no máximo 35 caracteres',
            'telefone.required' => 'Informe seu telefone',
            'telefone.min' => 'Informe um telefone válido',
            'telefone.max' => 'Informe um telefone válido',
            'email.required' => 'Informe seu e-mail',
            'email.email' => 'Informe um e-mail válido',
            'email.max' => 'O e-mail excede o limite de 100 caracteres'
        ];
    }
}
