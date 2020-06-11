<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimulacaoEmprestimoFormRequest extends FormRequest
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
            'valor_emprestimo' => 'required',
            'instituicao' => 'required',
            'convenio' => 'required',
            'parcela' => 'required'
        ];
    }
    
     public function messages() 
    {
        return [
            'valor_emprestimo.required' => 'O campo Valor Empréstimo é obrigatório!',
            'instituicao.required' => 'O campo Instituicao é obrigatório!',            
            'convenio.required' => 'O campo Convênio é obrigatório!',
            'parcela.required' => 'O Parcela é obrigatório!',            
        ];
    }
}
