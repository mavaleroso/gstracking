<?php

namespace App\Http\Requests\Tracking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class VehicleRequest extends FormRequest
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
            'picture' => 'nullable',
            'name' => 'required',
            'description' => 'nullable',
            'serviceProvider' => 'required',
            'templateNumber' => 'required',
            'capacityNumber' => 'required',
            'drivers' => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'serviceProvider' => 'Service Provider',
            'templateNumber' => 'Template Number',
            'capacityNumber' => 'Capacity',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => __('main/validations.required'),
            'serviceProvider.required' => __('main/validations.required'),
            'templateNumber.required' => __('main/validations.required'),
            'capacityNumber.required' => __('main/validations.required'),
        ];

    }
}