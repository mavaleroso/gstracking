<?php

namespace App\Http\Requests\ListTravels;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class TravelRequest extends FormRequest
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
            'starting_odo' => 'required',
            'ending_odo' => 'nullable',
            'date_submitted_proc' => 'required',
            'distance_travelled' => 'nullable',
            'rate_per_km' => 'required',
            'flat_rate' => 'required',
            'no_nights' => 'nullable',
            'rate_per_night' => 'nullable',
            'remarks' => 'nullable',
            'travel_date' => 'required',
            'travel_time' => 'nullable',
            'vehicle_id' => 'nullable',
            'total_cost' => 'nullable',
            'status' => 'nullable'
        ];
    }

    public function attributes()
    {
        return [
            'starting_odo' => 'Starting ODO',
            'date_submitted_proc' => 'Date Submitted to Procurement',
            'rate_per_km' => 'Rate per KM',
            'flat_rate' => 'Flat Rate',
            'travel_date' => 'Date Travelled',
        ];

    }

    public function messages()
    {
        return [
            'starting_odo' => __('main/validations.required'),
            'date_submitted_proc' => __('main/validations.required'),
            'rate_per_km' => __('main/validations.required'),
            'flat_rate' => __('main/validations.required'),
            'travel_date' => __('main/validations.required'),
        ];

    }
}