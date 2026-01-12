<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanghasthBrahmacharyBahaneStoreRequest extends FormRequest
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
           'name' 				=> 'required',
           'father_name' 		=> 'required',
           'mother_name' 		=> 'required',
           'date_of_birth' 		=> 'required',
           'birth_place' 		=> 'required',
           'secular_education' 	=> 'required',
           'url_slug' 			=> 'required',
           'serial_number'      => 'required|numeric',
           'mother_tongue' 		=> 'required',
		   'image'				=> 'required|mimes:jpeg,png,jpg|max:10240',
		   
        ];
		
    }
}
