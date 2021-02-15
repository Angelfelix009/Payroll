<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPFARequest extends FormRequest
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
            'pfaname' => 'required|string|max:255|unique:pensiontbls',
            'pencode' => 'required|string|integer',
            'pfacontact' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:255',
        ];
    }
}
