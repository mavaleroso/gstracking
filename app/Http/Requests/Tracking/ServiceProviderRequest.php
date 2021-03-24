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
            'companyName' => 'required',
            'vehicleCount' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'type' => 'Type',
            'companyName' => 'CompanyName',
            'vehicleCount' => 'VehicleCount'
        ];

    }

    public function messages()
    {
        return [
            'type.required' => __('main/validations.required'),
            'companyName.required' => __('main/validations.required'),
            'vehicleCount.required' => __('main/validations.required')
        ];

    }
}