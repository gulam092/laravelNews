<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addcontact extends FormRequest
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
            'username'      => 'required|Regex:/^[\D]+$/i|max:100',
             'useremail'    => 'required|email|max:255',
             'userphone'    =>'required|min:10|numeric',
             'Message'      =>'required|min:20'
        ];
    }
    public function messages()
    {
    return [
        'username.required'         => 'Enter Your Name',
        'username.max'              => 'Name Must Less than 100 Char',
        'username.Regex'            =>'Enter Valid Name',
        'useremail.required'        => 'Enter Your Email',
         'useremail.email'          => 'Enter valid form Of email',
        'userphone.required'        =>'Enter Your Mobile number',
        'userphone.numeric'         =>'Enter Only numeric Value in phone number',
         'Message.required'         =>'Enter Your Message',
         'Message.min'               =>'Enter atleast 20 Word'
        ];
    }
}
