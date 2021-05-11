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
        $data = [
            'id' => 'nullable',
            'vehicle_type' => 'required',
            'po' => 'required',
        ];

        if ($this->request->get('vehicle_type') == 'office') {
            $data['vehicle'] = 'required';
            $data['driver'] = 'required';
        } else if ($this->request->get('vehicle_type') == 'rental') {
            $data['vehicle_desc'] = 'required';
            $data['vehicle_template'] = 'required';
            $data['driver_name'] = 'required';
            $data['driver_contact'] = 'required';
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
            'vehicle_type' => 'Type of Vehicle',
            'po' => 'PO',
        ];

        if ($this->request->get('vehicle_type') == 'office') {
            $data['vehicle'] = 'Vehicle';
            $data['driver'] = 'Driver';
        } else if ($this->request->get('vehicle_type') == 'rental') {
            $data['vehicle_desc'] = 'Description';
            $data['vehicle_template'] = 'Template';
            $data['driver_name'] = 'Driver name';
            $data['driver_contact'] = 'Driver Contact number';
        }

        return $data;

    }

    public function messages()
    {
        $data = [
            'vehicle_type.required' => __('main/validations.required'),
            'po.required' => __('main/validations.required'),
        ];

        if ($this->request->get('vehicle_type') == 'office') {
            $data['vehicle'] = __('main/validations.required');
            $data['driver'] = __('main/validations.required');
        } else if ($this->request->get('vehicle_type') == 'rental') {
            $data['vehicle_desc'] = __('main/validations.required');
            $data['vehicle_template'] = __('main/validations.required');
            $data['driver_name'] = __('main/validations.required');
            $data['driver_contact'] = __('main/validations.required');
        }

        return $data;
    }
}