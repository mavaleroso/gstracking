<?php

namespace App\Http\Requests\listRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class TravelRequestStaff extends FormRequest
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
            'vehicle' => 'required',
            'po' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'vehicle' => 'Vehicle',
            'po' => 'PO',
        ];

    }

    public function messages()
    {
        return [
            'vehicle.required' => __('main/validations.required'),
            'po.required' => __('main/validations.required'),
        ];

    }
}