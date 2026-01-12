<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanghastAaryikaStoreRequest extends FormRequest
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
           'mata_ji_name' 		=> 'required',
           'old_name' 			=> 'required',
           'father_name' 		=> 'required',
           'mother_name' 		=> 'required',
           'date_of_birth' 		=> 'required',
           'birth_place' 		=> 'required',
           'secular_education' 	=> 'required',
           'aryika_diksha' 		=> 'required',
           'diksha_detail' 		=> 'required',
           'initiation_guru' 	=> 'required',
           'url_slug' 			=> 'required',
           'serial_number' 		=> 'required|numeric',
		   'image'				=> 'required|mimes:jpeg,png,jpg|max:10240',			'vrat_guru' 			=> 'required',           'brahmacharya_vrat' 			=> 'required',           'mother_tongue' 		=> 'required',
		   
        ];
		
    }
}
