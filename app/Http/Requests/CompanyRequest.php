<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyRequest extends Request
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
            
            'tradename'=>'required',
            'business_name'=>'required',
            'rfc'=>'required',
            'turn'=>'required',
            'manager'=>'required',
            'contact'=>'required',
            'position'=>'required',
            'location'=>'required',
            'phone'=>'required',
            'cell'=>'required',
            'email'=>'required',
            'web'=>'required',
            'business_address'=>'required',
            'street'=>'required',
            'colony'=>'required',
            'city'=>'required',
            'postal'=>'required',
            'telephone'=>'required',
            'country'=>'required',
            'state'=>'required',

        ];
    }
}
