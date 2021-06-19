<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname' => 'required|alpha|min:2',
            'lastname' => 'required|alpha|min:2',
            'email' => 'required|email|max:128|unique:users,email,'.$this->id,
//            'password' => [
//                'required',
//                'confirmed',
//                'min:6',
//                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/'
//            ],
            'photo'=>'image'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'firstname.min' => 'First Name must not be shorter than :min characters.',
            'lastname.min' => 'Last Name must not be shorter than :min characters.',
            'photo.image' => 'Uploaded file must be an image.',
            'email.email'=>'Email must be in a format.'
//            'password.min'=>'Password need to contain minimum :min characters',
//            'password.regex'=>"Password need to contain at least one letter and one number",
//            'password.confirmed'=>"Passwords doesn't match"
        ];
    }
}
