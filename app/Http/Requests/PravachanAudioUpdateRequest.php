<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PravachanAudioUpdateRequest extends FormRequest
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
			'url' 					=> 'required',			'status' 				=> 'required',			'date' 					=> 'required',
        ];
		if($this->hasfile('thumbnail')){
			 $rules['thumbnail']='required|mimes:jpeg,png,jpg|max:10240';
		}
		return $rules;
    }
}
