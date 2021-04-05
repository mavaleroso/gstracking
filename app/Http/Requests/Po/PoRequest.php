<?php

namespace App\Http\Requests\Po;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PoRequest extends FormRequest
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
            'id' => 'nullable',
            'po_no' => 'required',
            'po_amount' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'balance' => 'required',
            'status' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'id' => 'ID',
            'po_no' => 'PO #',
            'po_amount' => 'Amount',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'balance' => 'Balance',
            'status' => 'Status',
        ];

    }

    public function messages()
    {
        return [
            'po_no.required' => __('main/validations.required'),
            'po_amount.required' => __('main/validations.required'),
            'balance.required' => __('main/validations.required'),
            'status.required' => __('main/validations.required'),
        ];

    }
}