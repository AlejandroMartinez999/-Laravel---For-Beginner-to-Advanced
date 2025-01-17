<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

            'name' => ['required', 'alpha', 'min:6', 'Max:10'],
            'email' => ['required', 'email'],
            'password' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The user name field is requiered!',
            'name.alpha' => 'Usesr Name Should only contain letters !',
            'name.min' => 'sasajljlk!',
            'email.email' => 'Hello thi is not email!'
        ];
    }
}
