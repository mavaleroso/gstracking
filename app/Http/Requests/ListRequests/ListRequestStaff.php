<?php

namespace App\Http\Requests\listRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ListRequestStaff extends FormRequest
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
            'remarks' => 'required',

        ];
    }

    public function attributes()
    {
        return [
            'remarks' => 'Remarks',
        ];

    }

    public function messages()
    {
        return [
            'remarks' => __('main/validations.required'),
        ];

    }
}