<?php

namespace App\Http\Requests\TransportationDriver;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class DriverRequest extends FormRequest
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
    
    public function rules()
    {
        return [
            'id' => 'nullable',
            'fullname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'contactNumber' => 'required',
            'status' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'Fullname',
            'age' => 'Age',
            'gender' => 'Gender',
            'contactNumber' => 'Contact Number',
            'status' => 'Status'
        ];

    }

    public function messages()
    {
        return [
            'fullname.required' => __('main/validations.required'),
            'age.required' => __('main/validations.required'),
            'gender.required' => __('main/validations.required'),
            'contactNumber.required' => __('main/validations.required'),
            'status.required' => __('main/validations.required')
        ];

    }
}