<?php

namespace App\Http\Requests\VehicleTravels;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class VehicleTravelRequest extends FormRequest
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
        $rules = [
            'starting_odo' => 'required',
            'ending_odo' => 'required',
            'date_submitted_proc' => 'required',
            'distance_travelled' => 'nullable',
            'flat_rate' => 'nullable',
            'no_nights' => 'nullable',
            'rate_per_night' => 'nullable',
            'remarks' => 'nullable',
            'vehicle_id' => 'nullable',
            'total_cost' => 'nullable',
            'status' => 'nullable',
            'vehicle_type' => 'nullable'
        ];

        if ($this->request->get('vehicle_type') == 4) {
            $rules['rate_per_km'] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attr = [
            'starting_odo' => 'Starting ODO',
            'ending_odo' => 'Ending ODO',
            'date_submitted_proc' => 'Date Submitted to Procurement',
        ];

        if ($this->request->get('vehicle_type') == 4) {
            $attr['rate_per_km'] = 'Rate per KM';
        }

        return $attr;
    }

    public function messages()
    {
        $msgs = [
            'starting_odo' => __('main/validations.required'),
            'ending_odo' => __('main/validations.required'),
            'date_submitted_proc' => __('main/validations.required'),
        ];

        if ($this->request->get('vehicle_type') == 4) {
            $msgs['rate_per_km'] = __('main/validations.required');
        }

        return $msgs;
    }
}
