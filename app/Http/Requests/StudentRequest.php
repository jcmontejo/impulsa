<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request
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
             'name' => 'required',
             'last_name' => 'required',
             'birthdate' => 'required',
             'place' => 'required',
             'sex' => 'required',
             'email' => 'required',
             'civil_status' => 'required',
             'phone' => 'required',
             'address' => 'required',
             'post_code' => 'required',
             'country' => 'required', 
             'state' => 'required', 
             'city' => 'required', 
             'travel' => 'required', 
             'relocation' => 'required',
             'licence' => 'required', 
             'car' => 'required', 
             'title' => 'required', 
             'description' => 'required', 
        ];
    }
}
