<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SahityaUpdateRequest extends FormRequest
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
			'file_type'				=> 'required',
			'status'				=> 'required',
			'order' 				=> 'nullable|numeric',
        ];	
		if ($this->input('file_type') == 2) {
			$rules['file'] = 'required|url';
		}
		if ($this->input('file_type') == 1) {
			if($this->hasfile('file')){
				$rules['file'] = 'required|mimes:pdf|max:12240';
			}
		}
		
		if($this->hasfile('image')){
			 $rules['image']='required|mimes:jpeg,png,jpg|max:10240';
		}
		return $rules;
    }
}
