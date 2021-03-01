<?php

namespace App\Http\Requests\Travels;

use Illuminate\Foundation\Http\FormRequest;

class TravelStoreRequest extends FormRequest
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
        $rules = [
            'travel_radio' => 'required',
            'prog_div_sec' => 'required',
            'pur_travel' => 'required',
            'region' => 'required',
            'province' => 'required',
            'city' => 'required',
            'brgy' => 'required',
            'date_travel' => 'required',
            'time_depart' => 'required',
            'pax_name_1' => 'required',
            'pax_des_1' => 'required'
        ];

        return $rules;        
    }

    /**
     * list of attributes to be changed on display
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'travel_radio' => 'Vehicle',
            'prog_div_sec' => 'Department',
            'pur_travel' => 'Purpose',
            'region' => 'Region',
            'province' => 'Province',
            'city' => 'City',
            'brgy' => 'Barangay',
            'date_travel' => 'Date',
            'time_depart' => 'Time',
            'pax_name_1' => 'Passenger Name',
            'pax_des_1' => 'Passenger Designation'
        ];
    }

    /**
     * List of custom messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'travel_radio' => __('main/validations.required'),
            'prog_div_sec' => __('main/validations.required'),
            'pur_travel' => __('main/validations.required'),
            'region' => __('main/validations.required'),
            'province' => __('main/validations.required'),
            'city' => __('main/validations.required'),
            'brgy' => __('main/validations.required'),
            'date_travel' => __('main/validations.required'),
            'time_depart' => __('main/validations.required'),
            'pax_name_1' => __('main/validations.required'),
            'pax_des_1' => __('main/validations.required')
        ];
    }
}
