<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSocialsRequest extends FormRequest
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
            'name'=>'required|alpha|min:3|max:30|unique:socials',
            'url'=>'required|regex:'.$regex
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'name.min' => 'Name must not be shorter than :min characters.',
            'name.max' => 'Name must not have more than :max characters.',
            'alpha='=>'The :attribute field must be entirely alpha characters.',
            'unique'=>'The :attribute field must be unique.',
            'regex'=>'Must be url address'
        ];
    }
}
