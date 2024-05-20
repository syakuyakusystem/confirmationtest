<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        // return [
        //     'first_name' => ['required', 'string', 'max:20'],
        //     'last_name' => ['required', 'string', 'max:20'],
        //     'gender' => ['required'],
        //     'email' => ['required','email'],
        //     'tel' => ['required'],
        //     'address' => ['required', 'string', 'max:255'],
        //     'building' => ['required', 'string', 'max:255'],
        //     'detail' => ['required', 'string', 'max:255'],
        // ];
    }
}
