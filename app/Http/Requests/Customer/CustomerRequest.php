<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'                  => 'required',
            'phone'                 => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'                 => 'required|email|unique:ms_customers,email',
            'address'               => 'required',
            'password'              => 'required_with:password_confirmation|string|confirmed',
            'password_confirmation' => 'required|same:password'
        ];
    }
}