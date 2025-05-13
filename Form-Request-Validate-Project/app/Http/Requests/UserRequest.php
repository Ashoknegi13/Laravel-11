<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required',
            'userpass'=>'required | alpha_num | min:6',
            'useremail'=>'required | email',
            'userage'=>'required | min:18',
            'usercity'=>'required'
        ];
    }

    // public function messages(){
    //     return[
    //         'username.required'=>':attribute Required',  // this is for use default input field name
    //         'userpass.required'=>'Password Is Required',
    //         'userpass.alpha_num'=>'only number and Alphabate allowed',
    //         'userpass.min'=>'enter min 6 digit',
    //         'userage.min'=>'min age required 18 ',
    //         'useremail.required'=>'Email Address Must Must  Required',
    //         'useremail.email'=>'Enter correct email format',
    //         'userage.required'=> 'age is required',
    //         'userage.numeric'=>'Enter only numerci value',
     //         'usercity.required'=>'city is required'
    //     ];
    // }


    public function attributes(){
        return [
           'username'=>'Name ',
            'userpass'=>'Password ',
            'useremail'=>'Email Address',
            'userage'=>'Age',
            'usercity'=>'City'
        ];
    }
}
