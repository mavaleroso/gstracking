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
        $rules = [];

        if ($this->request->has('type')) {
            $rules['id'] = 'required';
            $rules['type'] = 'nullable';
            $rules['particulars'] = 'required';
            $rules['no_liters'] = 'required';
            $rules['unit_price'] = 'required';
            $rules['amount'] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attr = [];

        if ($this->request->has('type')) {
            $attr['id'] = 'ID';
            $attr['particulars'] = 'Particulars';
            $attr['no_liters'] = 'No. of Liters';
            $attr['unit_price'] = 'Unit Price';
            $attr['amount'] = 'Amount';
        }

        return $attr;
    }

    public function messages()
    {
        return [];

        if ($this->request->has('type')) {
            $msgs['id.required'] = __('main/validations.required');
            $msgs['particulars.required'] = __('main/validations.required');
            $msgs['no_liters.required'] = __('main/validations.required');
            $msgs['unit_price.required'] = __('main/validations.required');
            $msgs['amount.required'] = __('main/validations.required');
        }

        return $msgs;
    }
}
