<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatecat extends FormRequest
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
             'cname' => 'required|min:3|max:20|unique:categories',
             'image' => 'mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
       return [
            'cname.required'    => 'Enter Category Name',
            'cname.min'         => 'Category Must Between 3 to 20 Char',
            'cname.max'         => 'Category Must Between 3 to 20 Char',
            'cname.unique'      => 'Category Already Exist',
            'image.mimes'       => 'Only jpg or jpeg file support',
            'image.max'         =>'maximum size is 2048kb'            
        ];
    }
}
