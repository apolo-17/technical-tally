<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name_company' => 'required',
            'name_partner' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name_company.required' => 'El nombre de la compañia es requerido',
            'name_partner.required' => 'El nombre del socio es requerido',
            'phone_number.required' => 'El numero telefonico es requerido',
            'phone_number.numeric' => 'Solo se aceptan numeros',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo debe ser un email valido'
        ];
    }
}
