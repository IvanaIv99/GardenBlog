<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNavRequest extends FormRequest
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
            'name'=>'required|alpha_num|min:3|max:30|unique:menus',
            'route'=>"required|alpha|min:3|max:50|unique:menus",
            'roles'=>'required|in:1,2'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'name.min' => 'Name must not be shorter than :min characters.',
            'name.max' => 'Name must not have more than :max characters.',
            'alpha_num'=>'The :attribute field must be entirely alpha-numeric characters.',
            'unique'=>'The :attribute field must be unique.',
            'roles.in'=>'Role is required'
        ];
    }
}
