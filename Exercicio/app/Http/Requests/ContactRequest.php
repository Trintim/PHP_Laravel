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
            'contact' => 'required|max:12|min:9', 'unique:contacts,contact',
            'email' => 'email', 'unique:contacts,email'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute deve ser preenchido',
            'name.min' => 'Campo nome deve ter no minino 5 caracteres',
            'email.email' => 'O email informado não e valido',
            'contact.max' => 'Campo deve ter no maximo 12 caracteres',
            'contact.min' => 'Campo deve ter no minimo 9 caracteres',
        ];
    }
}
