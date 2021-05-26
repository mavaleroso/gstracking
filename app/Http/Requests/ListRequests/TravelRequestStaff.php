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
            'vehicle_office' => 'required_without:vehicle_rental',
            'vehicle_rental' => 'required_without:vehicle_office',
        ];

        if ($this->request->has('vehicle_office')) {
            $data['office_vehicle_total'] = 'nullable';
            for ($i=1; $i <= $this->request->get('office_vehicle_total'); $i++) { 
                $data['vehicle_'.$i] = 'required';
                $data['driver_'.$i] = 'required';
            }
        } 
        
        if ($this->request->has('vehicle_rental')) {
            $data['po'] = 'required';
            $data['rental_vehicle_total'] = 'nullable';
            for ($i=1; $i <= $this->request->get('rental_vehicle_total'); $i++) { 
                $data['vehicle_name_'.$i] = 'required';
                $data['vehicle_plate_'.$i] = 'required';
                $data['driver_name_'.$i] = 'required';
                $data['driver_contact_'.$i] = 'required';
            }
            
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
            'vehicle_office' => 'Office Vehicle',
            'vehicle_rental' => 'Rental Vehicle',
        ];

        if ($this->request->has('vehicle_office')) {
            for ($i=1; $i <= $this->request->get('office_vehicle_total'); $i++) { 
                $data['vehicle_'.$i] = 'Vehicle';
                $data['driver_'.$i] = 'Driver';
            }
        } 
        
        if ($this->request->has('vehicle_rental')) {
            $data['po'] = 'PO';
            for ($i=1; $i <= $this->request->get('rental_vehicle_total'); $i++) { 
                $data['vehicle_name_'.$i] = 'Description';
                $data['vehicle_plate_'.$i] = 'Template';
                $data['driver_name_'.$i] = 'Driver name';
                $data['driver_contact_'.$i] = 'Driver Contact number';
            }
        }

        return $data;

    }

    public function messages()
    {
        $data = [
            'vehicle_office.required' => __('main/validations.required'),
            'vehicle_rental.required' => __('main/validations.required'),
        ];

        if ($this->request->has('vehicle_office')) {
            for ($i=1; $i <= $this->request->get('office_vehicle_total'); $i++) { 
                $data['vehicle_'.$i] = __('main/validations.required');
                $data['driver_'.$i] = __('main/validations.required');
            }
        }

        if ($this->request->has('vehicle_rental')) {
            $data['po'] =  __('main/validations.required');
            for ($i=1; $i <= $this->request->get('rental_vehicle_total'); $i++) { 
                $data['vehicle_name_'.$i] = __('main/validations.required');
                $data['vehicle_plate_'.$i] = __('main/validations.required');
                $data['driver_name_'.$i] = __('main/validations.required');
                $data['driver_contact_'.$i] = __('main/validations.required');
            }
        }

        return $data;
    }
}