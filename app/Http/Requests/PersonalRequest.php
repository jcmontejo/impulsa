<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonalRequest extends Request
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
            'birthdate' => 'required',
            'civil_status' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'post_code' => 'required',
            'address' => 'required',
            'nationality' => 'required',
            'licence' => 'required',
            'car' => 'required',


        ];
    }
}
