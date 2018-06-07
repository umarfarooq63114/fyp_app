<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicianRequest extends FormRequest
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
        return [
            'technician_name'=>'required',
            'technician_category'=>'required',
            'technician_no'=>'required',
            'technician_rating'=>'required',
            'technician_cnic'=>'required',
            'technician_address'=>'required',
        ];
    }
}
