<?php

namespace App\Http\Requests\FuelCharges;

use Illuminate\Foundation\Http\FormRequest;

class FuelChargesStoreRequest extends FormRequest
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
            'vehicle_id' => 'required',
            'driver_id' => 'required',
            'po_id' => 'required',
            'purpose' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'vehicle_id' => 'Vehicle',
            'driver_id' => 'Driver',
            'po_id' => 'PO',
            'purpose' => 'Purpose'
        ];
    }

    public function messages()
    {
        return [
            'vehicle_id.required' => __('main/validations.required'),
            'driver_id.required' => __('main/validations.required'),
            'po_id.required' => __('main/validations.required'),
            'purpose.required' => __('main/validations.required'),
        ];
    }
}
