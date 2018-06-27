<?php

namespace IndieSonico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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

            'name_complete'=> 'required',
            'email'=> 'required',


        ];
    }
     public function messages()
    {
        return [
            'name_complete.required'=>'Falta el campo de Nombre',
            'email.required'=>'Falta el campo de Correo Electrónico',
        ];
    }
}
