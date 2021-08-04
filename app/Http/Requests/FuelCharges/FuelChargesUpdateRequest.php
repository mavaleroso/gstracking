<?php

namespace App\Http\Requests\FuelCharges;

use Illuminate\Foundation\Http\FormRequest;

class FuelChargesUpdateRequest extends FormRequest
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
            'id' => 'required',
            'particulars' => 'required',
            'no_liters' => 'required',
            'unit_price' => 'required',
            'amount' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'id' => 'ID',
            'particulars' => 'Particulars',
            'no_liters' => 'No. of Liters',
            'unit_price' => 'Unit Price',
            'amount' => 'Amount'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => __('main/validations.required'),
            'particulars.required' => __('main/validations.required'),
            'no_liters.required' => __('main/validations.required'),
            'unit_price.required' => __('main/validations.required'),
            'amount.required' => __('main/validations.required'),
        ];
    }
}
