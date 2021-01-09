<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            // required - Determina o campo "nome" como obrigatorio. Caso o mesmo não seja informado, é enviado um erro atraves de "$errors" e o usuario é redirecionado para a ultima pagina que esteve
            // min - Determina que deve ser informado no minimo 3 caracteres
            'nome' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            // Define uma mensagem de erro customizada caso a validação "required" do campo "nome" falhe
            'nome.required' => 'O campor "Nome" é obrigatorio!',
            // Define uma mensagem de erro customizada caso a validação "min" do campo "nome" falhe
            'nome.min' => 'O campo "Nome" deve possuir pelo menos 3 caracteres!'
        ];
    }
}
