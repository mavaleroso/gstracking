<?php

namespace App\Http\Requests\TransportationVehicle;

use Illuminate\Foundation\Http\FormRequest;

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
            'id' => 'nullable',
            'picture' => 'nullable',
            'pictureName' => 'nullable',
            'name' => 'required',
            'description' => 'nullable',
            'templateNumber' => 'required',
            'capacityNumber' => 'required',
            'status' => 'nullable',
            'remarks' => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'templateNumber' => 'Template Number',
            'capacityNumber' => 'Capacity',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => __('main/validations.required'),
            'templateNumber.required' => __('main/validations.required'),
            'capacityNumber.required' => __('main/validations.required'),
        ];

    }
}