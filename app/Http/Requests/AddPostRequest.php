<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            'title'=>'required|min:3|max:100|unique:posts',
            'category'=>'required',
            'thumbPhoto'=>'required|image|mimes:jpeg,png,jpg',
            'content'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'title.min' => 'Title must not be shorter than :min characters.',
            'title.max' => 'Title must not have more than :max characters.',
            'thumbPhoto.image' => 'Uploaded file must be an image.',
        ];
    }
}
