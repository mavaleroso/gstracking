<?php

namespace App\Http\Requests\Travels;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
            'request_id' => 'nullable',
            'travel_radio' => 'required',
            'prog_div_sec' => 'required',
            'pur_travel' => 'required',
            'region' => 'required',
            'province' => 'required',
            'city' => 'required',
            'brgy' => 'required',
            'date_travel' => 'required',
            'time_depart' => 'required',
            'pax_total' => 'required',
        ];

        for ($i=1; $i <= $this->request->get('pax_total'); $i++) { 
            $rules['pax_name_'.$i] = 'required';
            $rules['pax_des_'.$i] = 'required';
        }

        return $rules;        
    }

    /**
     * list of attributes to be changed on display
     *
     * @return array
     */
    public function attributes()
    {
        $attributes = [
            'travel_radio' => 'Vehicle',
            'prog_div_sec' => 'Department',
            'pur_travel' => 'Purpose',
            'region' => 'Region',
            'province' => 'Province',
            'city' => 'City',
            'brgy' => 'Barangay',
            'date_travel' => 'Date',
            'time_depart' => 'Time',
        ];

        for ($i=1; $i <= $this->request->get('pax_total'); $i++) { 
            $attributes['pax_name_'.$i] = 'Passenger Name';
            $attributes['pax_des_'.$i] = 'Passenger Designation';
        }

        return $attributes;
    }

    /**
     * List of custom messages
     *
     * @return array
     */
    public function messages()
    {
        $messages = [
            'travel_radio' => __('main/validations.required'),
            'prog_div_sec' => __('main/validations.required'),
            'pur_travel' => __('main/validations.required'),
            'region' => __('main/validations.required'),
            'province' => __('main/validations.required'),
            'city' => __('main/validations.required'),
            'brgy' => __('main/validations.required'),
            'date_travel' => __('main/validations.required'),
            'time_depart' => __('main/validations.required')
        ];

        for ($i=1; $i <= $this->request->get('pax_total'); $i++) { 
            $messages['pax_name_'.$i] = __('main/validations.required');
            $messages['pax_des_'.$i] = __('main/validations.required');
        }

        return $messages;
    }
}
