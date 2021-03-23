<?php

namespace App\Http\Requests\Tracking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ServiceProviderRequest extends FormRequest
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
            'type' => 'required',
            'companyname' => 'required',
            'vehiclecount' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'type' => 'Type',
            'companyname' => 'Companyname',
            'vehiclecount' => 'Vehiclecount'
        ];

    }

    public function messages()
    {
        return [
            'type.required' => __('main/validations.required'),
            'companyname.required' => __('main/validations.required'),
            'vehiclecount.required' => __('main/validations.required')
        ];

    }
}