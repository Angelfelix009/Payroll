<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterBranchRequest extends FormRequest
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
            'branch_name' => 'required|string|max:255|unique:branchtbls',
            'branch_code' => 'required|string|integer',
            'branch_div' => 'required|string|max:255',
            'branch_state' => 'required|string|max:255',
        ];
    }
}
