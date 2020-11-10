<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'phone'                 => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'                 => 'required|email|unique:ms_customers,id,' . $this->id . ',email',
            'address'               => 'required',
            'company_name'          => 'required',
            'role'                  => 'required|string',
            'nationallity'          => 'required|string',
        ];
    }
}
