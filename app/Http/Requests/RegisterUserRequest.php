<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'firstname' => 'required|alpha|min:2',
            'lastname' => 'required|alpha|min:2',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                'min:6',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/'
            ],
            'photo'=>'image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'name.min' => 'Name must not be shorter than :min characters.',
            'photo.image' => 'Uploaded file must be an image.',
            'email.email'=>'Email must be in a format.',
            'password.min'=>'Password need to contain minimum :min characters',
            'password.regex'=>"Password need to contain at least one letter and one number",
            'password.confirmed'=>"Passwords doesn't match"
        ];
    }
}
