<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RanoliRatnakarUpdateRequest extends FormRequest
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
           'url_slug' 			=> 'required',
		   'type' 				=> 'required',
		   'status' 			=> 'required',
		   'order' 				=> 'nullable|numeric',
		 ];

		return $rules;
		
    }
}
