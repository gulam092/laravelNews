<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addbook extends FormRequest
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
             'title' => 'required|min:5|max:70|unique:books',
             'price' =>'required|integer|max:9999999999',
             'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
    public function messages()
    {
    return [
            'title.required'  => 'Enter Category Name',
            'title.min'       => 'Category Must Between 5 to 50 Char',
            'title.max'       => 'Category Must Between 5 to 50 Char',
            'title.unique'    => 'Category Already Exist',
            'price.required'  =>'Enter Price of Books',
            'price.integer'   =>'Enter ony numeric Value',
            'image.required'  => 'Please File Choose',
            'image.mimes'     =>'Only jpg or jpeg file support',
             'image.max'      =>'maximum size is 2048kb',
        ];
    }
}
