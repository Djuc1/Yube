<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        /*return [ 
            
            'name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('listings', 'email')],
            'password' => ['required','confirmed','min:8','max:12'],
            'confirm_password' => ['required','min:8','max:12']
                  
        ];
        */
    }
}
 

