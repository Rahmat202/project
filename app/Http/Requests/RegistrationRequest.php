<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [


                'fname' => 'required',
                'lname' => 'required',
                'phone' => 'required',
                'cnic' => 'required',
                'country' => 'required',
                'city' => 'required',
                'gender' => 'required',
                'email' => 'required|min:8',
                'DOB' => 'required',
                'Description' => 'required',
                'password' => 'required|min:6',
                'cpassword' => 'required|min:6',

        ];
    }
}
