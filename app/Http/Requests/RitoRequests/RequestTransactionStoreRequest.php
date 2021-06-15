<?php

namespace App\Http\Requests\RitoRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RequestTransactionStoreRequest extends FormRequest
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
            'selected' => 'nullable',
            'rp_vehicle' => 'required_without:hired_vehicle',
            'hired_vehicle' => 'required_without:rp_vehicle',
        ];

        if ($this->request->has('rp_vehicle')) {
            $rules['rp_total'] = 'nullable';
            for ($i=1; $i <= $this->request->get('rp_total'); $i++) { 
                $rules['vehicle_'.$i] = 'required';
                $rules['driver_'.$i] = 'required';
            }
        } 
        
        if ($this->request->has('hired_vehicle')) {
            $rules['travel_po'] = 'required';
            $rules['hired_total'] = 'nullable';
            for ($i=1; $i <= $this->request->get('hired_total'); $i++) { 
                $rules['vehicle_name_'.$i] = 'required';
                $rules['vehicle_plate_'.$i] = 'required';
                $rules['driver_name_'.$i] = 'required';
                $rules['driver_contact_'.$i] = 'required';
            }
            
        }

        return $rules;
    }

    public function attributes()
    {
        $attr = [
            'rp_vehicle' => 'RP Vehicle',
            'hired_vehicle' => 'Hired Vehicle',
        ];

        if ($this->request->has('rp_vehicle')) {
            for ($i=1; $i <= $this->request->get('rp_total'); $i++) { 
                $attr['vehicle_'.$i] = 'Vehicle';
                $attr['driver_'.$i] = 'Driver';
            }
        } 
        
        if ($this->request->has('hired_vehicle')) {
            $attr['travel_po'] = 'Travel PO';
            $attr['hired_total'] = 'Hired Total';
            for ($i=1; $i <= $this->request->get('hired_total'); $i++) { 
                $attr['vehicle_name_'.$i] = 'Description';
                $attr['vehicle_plate_'.$i] = 'Template';
                $attr['driver_name_'.$i] = 'Driver name';
                $attr['driver_contact_'.$i] = 'Driver Contact number';
            }
        }

        return $attr;
    }

    public function messages()
    {
        $msgs = [
            'rp_vehicle.required' => __('main/validations.required'),
            'hired_vehicle.required' => __('main/validations.required'),
        ];

        if ($this->request->has('rp_vehicle')) {
            for ($i=1; $i <= $this->request->get('rp_total'); $i++) { 
                $msgs['vehicle_'.$i] = __('main/validations.required');
                $msgs['driver_'.$i] = __('main/validations.required');
            }
        }

        if ($this->request->has('hired_vehicle')) {
            $msgs['travel_po'] =  __('main/validations.required');
            for ($i=1; $i <= $this->request->get('hired_total'); $i++) { 
                $msgs['vehicle_name_'.$i] = __('main/validations.required');
                $msgs['vehicle_plate_'.$i] = __('main/validations.required');
                $msgs['driver_name_'.$i] = __('main/validations.required');
                $msgs['driver_contact_'.$i] = __('main/validations.required');
            }
        }

        return $msgs;
    }
}