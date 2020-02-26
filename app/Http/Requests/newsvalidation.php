<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newsvalidation extends FormRequest
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
              'news_title' =>'required|min:3|max:20|unique:news',
              'desciption' =>'required',
              'image'  =>'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
       return [
            'news_title.required'   => 'Enter Category Name',
            'news_title.min'        => 'Category Must Between 3 to 20 Char',
            'news_title.max'        => 'Category Must Between 3 to 20 Char',
            'news_title.unique'     => 'Category Already Exist',
            'image.required'        => 'Please File Choose',
            'image.mimes'         =>'Only jpg or jpeg file support',
             'image.max'          =>'maximum size is 2048kb',

       ]; 
    }
}
