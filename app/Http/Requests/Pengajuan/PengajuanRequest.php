<?php

namespace App\Http\Requests\Pengajuan;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanRequest extends FormRequest
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
            'no_ktp'        => 'required|digits:16|numeric',
            'image_ktp'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_npwp'       => 'required|digits:15|numeric',
            'image_npwp'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'       => 'required',
            'type'          => 'required'
        ];
    }
}
