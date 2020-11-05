<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
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
            'email'                 => 'required|email|unique:users,email',
            'address'               => 'required',
            'password'              => 'required|string',
            'password_confirmation' => 'required|same:password',
        ];
    }
}