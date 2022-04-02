<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:5', 'string',
            'contact' => 'required', 'numeric', 'min:9', 'max:9','unique:contacts',
            'email' => 'required|email', 'unique:contacts'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no minimo 5 caracteres',
            'email.email' => 'O campo precisa de um E-mail valido',
        ];
    }
}
