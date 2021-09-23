<?php

namespace App\Http\Requests\RitoRequests;

use Illuminate\Foundation\Http\FormRequest;

class ExternalPassengersStoreRequest extends FormRequest
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
            'ext_total' => 'nullable'
        ];


        for ($i = 0; $i < $this->request->get('ext_total'); $i++) {
            $rules['name_' . $i] = 'required';
            $rules['designation_' . $i] = 'required';
            $rules['gender_' . $i] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attr = [];

        for ($i = 0; $i < $this->request->get('ext_total'); $i++) {
            $attr['name_' . $i] = 'Name';
            $attr['designation_' . $i] = 'Designation';
            $attr['gender_' . $i] = 'Gender';
        }

        return $attr;
    }

    public function messages()
    {
        $msgs = [];

        for ($i = 0; $i < $this->request->get('ext_total'); $i++) {
            $msgs['name_' . $i] = __('main/validations.required');
            $msgs['designation_' . $i] = __('main/validations.required');
            $msgs['gender_' . $i] = __('main/validations.required');
        }

        return $msgs;
    }
}
