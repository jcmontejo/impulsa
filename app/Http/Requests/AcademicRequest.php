<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AcademicRequest extends Request
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

             'name_posgrado' => 'required',
             'school_posgrado' => 'required', 
             'period_posgrado' => 'required', 
             'name_university' => 'required', 
             'school_university' => 'required', 
             'period_university' => 'required', 
             'name_preparatory' => 'required', 
             'school_preparatory' => 'required', 
             'period_preparatory' => 'required',
        ];
    }
}
