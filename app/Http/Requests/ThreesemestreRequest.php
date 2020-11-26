<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreesemestreRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            return [
                    'nota_1'        => 'required',
                    'nota_2'        => 'required', 
                    'nota_3'        => 'required', 
                    'nota_4'        => 'required', 
                    'nota_5'        => 'required', 
                    'nota_6'        => 'required', 
                    'nota_7'        => 'required', 
                    'nota_8'        => 'required', 
                    'nota_9'        => 'required', 
                    'nota_10'       => 'required', 
                    'nota_11'       => 'required', 
                    'nota_12'       => 'required', 
                    'nota_13'       => 'required', 
                    'nota_14'       => 'required', 
                    'nota_15'       => 'required', 
                    'nota_16'       => 'required', 
                    'formador'      => 'required', 
                    'user_id'       => 'required', 
                    'estudiante'    => 'required', 
                    'curso'         => 'required', 
            ];
        }else{

            return [
                    'nota_1'        => 'required',
                    'nota_2'        => 'required', 
                    'nota_3'        => 'required', 
                    'nota_4'        => 'required', 
                    'nota_5'        => 'required', 
                    'nota_6'        => 'required', 
                    'nota_7'        => 'required', 
                    'nota_8'        => 'required', 
                    'nota_9'        => 'required', 
                    'nota_10'       => 'required', 
                    'nota_11'       => 'required', 
                    'nota_12'       => 'required', 
                    'nota_13'       => 'required', 
                    'nota_14'       => 'required', 
                    'nota_15'       => 'required', 
                    'nota_16'       => 'required', 
                    'formador'      => 'required', 
                    'user_id'       => 'required', 
                    'estudiante'    => 'required', 
                    'curso'         => 'required', 
            ];
        }
    }

    public function messages()
    {
        return[
            'nota_1.required'         => 'El campo Nota 1 es obligatorio',
            'nota_2.required'         => 'El campo Nota 2 es obligatorio',
            'nota_3.required'         => 'El campo Nota 3 es obligatorio',
            'nota_4.required'         => 'El campo Nota 4 es obligatorio',
            'nota_5.required'         => 'El campo Nota 5 es obligatorio',
            'nota_6.required'         => 'El campo Nota 6 es obligatorio',
            'nota_7.required'         => 'El campo Nota 7 es obligatorio',
            'nota_8.required'         => 'El campo Nota 8 es obligatorio',
            'nota_9.required'         => 'El campo Nota 9 es obligatorio',
            'nota_10.required'         => 'El campo Nota 10 es obligatorio',
            'nota_11.required'         => 'El campo Nota 11 es obligatorio',
            'nota_12.required'         => 'El campo Nota 12 es obligatorio',
            'nota_13.required'         => 'El campo Nota 13 es obligatorio',
            'nota_14.required'         => 'El campo Nota 14 es obligatorio',
            'nota_15.required'         => 'El campo Nota 15 es obligatorio',
            'nota_16.required'         => 'El campo Nota 16 es obligatorio',
            'formador.required'        => 'El campo Docente es obligatorio',
            'user_id.required'         => 'El campo Estudiante ID es obligatorio',
            'estudiante.required'      => 'El campo Estudiante es obligatorio',
            'curso.required'           => 'El campo Curso es obligatorio',

        ];
        
    }
}
