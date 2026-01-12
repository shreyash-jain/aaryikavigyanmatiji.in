<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuvicharImageStoreRequest extends FormRequest
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
           'title' 	    	=> 'required',
           'type' 	    	=> 'required',
           'status' 		=> 'required',
           'image_url'		=> 'required',
		   'order' 			=> 'nullable|numeric',
        ];
    }
}




