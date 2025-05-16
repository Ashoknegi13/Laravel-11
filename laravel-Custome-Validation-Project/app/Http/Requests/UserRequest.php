<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Rules\Uppercase;
use Illuminate\Support\Facades\Validator;
use Closure;

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
            // 'username'=>['required ' , new Uppercase],
            'username'=>['required ' , 
                    function(string $attribute, mixed $value , Closure $fail){
                            if(strtoupper($value)!== $value){
                                $fail('the :attribute must be in uppercase');
                            }
                    }],
            'useremail'=>'email | required'
        ];
    }


    protected $stopOnFirstFailure = true;
}
