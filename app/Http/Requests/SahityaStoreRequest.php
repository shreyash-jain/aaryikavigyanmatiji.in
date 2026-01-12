<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class SahityaStoreRequest extends FormRequest
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
        $rules = [
			'title' 				=> 'required',
			'category' 				=> 'required',			
			'image' 				=> 'required|mimes:jpeg,png,jpg|max:10240',			
			'file_type'				=> 'required',
			//'file' 				=> 'required',  
			'status'				=> 'required',
			'order' 				=> 'nullable|numeric',
        ];
		if ($this->input('file_type') == 2) {
			$rules['file'] = 'required|url';
		}
		if ($this->input('file_type') == 1) {
			$rules['file'] = 'required|mimes:pdf|max:12240';
		}
		return $rules;
		
    }
	
}




