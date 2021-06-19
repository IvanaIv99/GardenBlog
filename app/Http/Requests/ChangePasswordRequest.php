<?php

namespace App\Http\Requests;

use App\Rules\MarchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required|confirmed|different:current_password|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/',
            'password_confirmation' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'password.min'=>'Password need to contain minimum :min characters',
            'password.regex'=>"Password need to contain at least one letter and one number",
            'password.confirmed'=>"Passwords doesn't match",
            'password.different'=>"New password must be different from old one"
        ];
    }
}
