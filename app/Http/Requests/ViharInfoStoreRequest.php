<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViharInfoStoreRequest extends FormRequest
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
           'title' 				=> 'required',         
           'address' 			=> 'required',
           'text' 				=> 'required',
           'start_date' 		=> 'required',
           'end_date'  			=> 'required|after_or_equal:start_date',
           'status' 			=> 'required',
        ];
		
    }
	public function messages(): array
    {
        return [
            'end_date.after_or_equal' => 'The end date must be a date after or equal to the start date.',
        ];
    }
}
