<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterBankRequest extends FormRequest
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
                        //
            'bankname' => 'required|string|max:255|unique:banktbls',
            'bank_code' => 'required|string|integer',
            'sort_code' => 'required|integer',
        ];
    }
}
