<?php

namespace App\Http\Requests\RequestTravel;

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
            'travel_radio' => 'nullable',
            'division' => 'required',
            'section' => 'required',
            'pur_travel' => 'required',
            'date_travel' => 'required|after_or_equal:today',
            'date_return' => 'required|after_or_equal:today',
            'time_depart' => 'required',
            'pax_total' => 'required',
            'destination_place' => 'required'

        ];

        for ($i = 1; $i <= $this->request->get('pax_total'); $i++) {
            $rules['pax_name_' . $i] = 'required';
            $rules['pax_des_' . $i] = 'required';
            $rules['pax_gen_' . $i] = 'required';
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
            'division' => 'Division',
            'section' => 'Section',
            'pur_travel' => 'Purpose',
            'date_travel' => 'Travel Date',
            'date_return' => 'Return Date',
            'time_depart' => 'Time',
        ];


        for ($i = 1; $i <= $this->request->get('pax_total'); $i++) {
            $attributes['pax_name_' . $i] = 'Passenger Name';
            $attributes['pax_des_' . $i] = 'Passenger Designation';
            $attributes['pax_gen_' . $i] = 'Passenger Gender';
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
            'section' => __('main/validations.required'),
            'division' => __('main/validations.required'),
            'pur_travel' => __('main/validations.required'),
            'date_travel' => __('main/validations.required'),
            'destination_place' => __('main/validations.required'),
            'date_return' => __('main/validations.required'),
            'time_depart' => __('main/validations.required')
        ];

        for ($i = 1; $i <= $this->request->get('pax_total'); $i++) {
            $messages['pax_name_' . $i] = __('main/validations.required');
            $messages['pax_des_' . $i] = __('main/validations.required');
            $messages['pax_gen_' . $i] = __('main/validations.required');
        }

        return $messages;
    }
}
