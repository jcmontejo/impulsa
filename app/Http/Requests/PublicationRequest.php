<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublicationRequest extends Request
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
            'job' => 'required',
            'vacancies' => 'required',
            'studies' => 'required',
            'sex' => 'required',
            'job_type' => 'required',
            'days' => 'required',
            'age' => 'required',
            'requirements' => 'required',
            'company' => 'required',
            'status_civil' => 'required',
            'travel' => 'required',
            'relocation' => 'required',
            'experience' => 'required',
            'job_position' => 'required',
            'skills' => 'required',
            'functions' => 'required',
            'state' => 'required',
            'city' => 'required',
            'salary' => 'required',
            'curricular' => 'required',
        ];
    }
}
