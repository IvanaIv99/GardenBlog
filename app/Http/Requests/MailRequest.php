<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'fullname'=>'required|min:3|max:50|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'mail'=>'required|email',
            'subject'=>'required|min:3|max:50|regex:/^[a-zA-Z]+(?:\s?[a-zA-Z]+)+$/',
            'message'=>'required|min:3|max:500|regex:/^[a-zA-Z]+(?:\s?[a-zA-Z]+)+$/'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'min' => 'The :attribute must not be shorter than :min characters.',
            'max' => 'The :attribute must not have more than :max characters.',
            'email'=>'Email is not in format.',

        ];
    }
}
