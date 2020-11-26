<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     *|not_regex:/^.+$/i
     * @return array
     */
    public function rules()
    {
        //Para video ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv")
        //$this->method('put')
        //this->method() == 'PUT'
        if($this->method() == 'PUT'){
            return [
                //
                'fullname'      => 'required|min:10',
                'document'      => 'required|min:5',
                'email'         =>'required|email|unique:users,email,'.$this->id,
                'phone'         => 'required|numeric|min:7',
                'curso_1'       => 'required',
                'curso_2'       => 'required',
                'curso_3'       => 'required',
                'password'      => 'required|confirmed'
            ];
        }else{

            return [
                //
                'fullname'      => 'required|min:10',
                'document'      => 'required|min:5',
                'email'         => 'required|email|unique:users',
                'phone'         => 'required|numeric|min:9',
                'curso_1'       => 'required',
                'curso_2'       => 'required',
                'curso_3'       => 'required',
                'password'      => 'required|confirmed'
            ];
        }
        
    }
    public function messages()
    {
        return[
            'fullname.required'     => 'El campo Nombre Completo es obligatorio',
            'fullname.min'          => 'El campo Nombre Completo debe contener al menos :min catacteres',
            'document.required'     => 'El campo Documento es obligatorio',
            'document.min'          => 'El campo Documento debe contener al menos :min catacteres',
            'email.required'        => 'El campo Correo Electronico es obligatorio',
            'email.email'           => 'El campo Correo Electronico debe ser una dirección de correo válida',
            'email.unique'          => 'El campo Correo Electronico ya esta en uso',
            'phone.required'        => 'El campo Número Telefónico  debe obligatorio',
            'phone.numeric'         => 'El campo Número Telefónico  debe ser un número',
            'curso_1.required'      => 'El campo Curso 1 debe ser obligatorio',
            'curso_2.required'      => 'El campo Curso 2 debe ser obligatorio',
            'curso_3.required'      => 'El campo Curso 3 debe ser obligatorio',
            'photo.max'             => 'El campo Foto no debe pesar más de :max kilobytes',
            'password.required'     => 'El campo Contraseña es obligatorio',
            'password.confirmed'    => 'El campo Confirmación Contraseña no coincide'

        ];
        
    }
}
