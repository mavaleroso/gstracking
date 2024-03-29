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
        $rules = [
            'id' => 'nullable',
            'radio_vehicle' => 'required',
        ];

        if ($this->request->get('radio_vehicle') == 1) {
            $rules['remarks'] = 'required';
        }

        if ($this->request->get('radio_vehicle') == 2 || $this->request->get('radio_vehicle') == 3) {
            $rules['rp_total'] = 'nullable';
            for ($i = 1; $i <= $this->request->get('rp_total'); $i++) {
                $rules['vehicle_' . $i] = 'required';
                $rules['driver_' . $i] = 'required';
            }
        }

        if ($this->request->get('radio_vehicle') == 4) {
            $rules['travel_po'] = 'required';
            $rules['hired_total'] = 'nullable';
            for ($i = 1; $i <= $this->request->get('hired_total'); $i++) {
                $rules['vehicle_name_' . $i] = 'required';
                $rules['vehicle_plate_' . $i] = 'required';
                $rules['driver_name_' . $i] = 'required';
                $rules['driver_contact_' . $i] = 'required';
            }
        }
        return $rules;
    }

    public function attributes()
    {
        $attr = [
            'radio_vehicle' => 'Mode of Transportation',
        ];

        if ($this->request->get('radio_vehicle') == 1) {
            $attr['remarks'] = 'Remarks';
        }

        if ($this->request->get('radio_vehicle') == 2 || $this->request->get('radio_vehicle') == 3) {
            for ($i = 1; $i <= $this->request->get('rp_total'); $i++) {
                $attr['vehicle_' . $i] = 'Vehicle';
                $attr['driver_' . $i] = 'Driver';
            }
        }

        if ($this->request->get('radio_vehicle') == 4) {
            $attr['travel_po'] = 'Travel PO';
            $attr['hired_total'] = 'Hired Total';
            for ($i = 1; $i <= $this->request->get('hired_total'); $i++) {
                $attr['vehicle_name_' . $i] = 'Description';
                $attr['vehicle_plate_' . $i] = 'Template';
                $attr['driver_name_' . $i] = 'Driver name';
                $attr['driver_contact_' . $i] = 'Driver Contact number';
            }
        }

        return $attr;
    }

    public function messages()
    {
        $msgs = [
            'radio_vehicle.required' => __('main/validations.required'),
        ];

        if ($this->request->get('radio_vehicle') == 1) {
            $msgs['remarks'] = __('main/validations.required');
        }

        if ($this->request->get('radio_vehicle') == 2 || $this->request->get('radio_vehicle') == 3) {
            for ($i = 1; $i <= $this->request->get('rp_total'); $i++) {
                $msgs['vehicle_' . $i] = __('main/validations.required');
                $msgs['driver_' . $i] = __('main/validations.required');
            }
        }

        if ($this->request->get('radio_vehicle') == 4) {
            $msgs['travel_po'] =  __('main/validations.required');
            for ($i = 1; $i <= $this->request->get('hired_total'); $i++) {
                $msgs['vehicle_name_' . $i] = __('main/validations.required');
                $msgs['vehicle_plate_' . $i] = __('main/validations.required');
                $msgs['driver_name_' . $i] = __('main/validations.required');
                $msgs['driver_contact_' . $i] = __('main/validations.required');
            }
        }

        return $msgs;
    }
}
