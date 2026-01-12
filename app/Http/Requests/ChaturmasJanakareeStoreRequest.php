<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class ChaturmasJanakareeStoreRequest extends FormRequest
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
           'date' 			=> 'required',
           'location' 		=> 'required',
        ];
    }
    
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        $response = response()->json([
            'error' =>true,
            'errors' => $errors,
        ]);

        throw new HttpResponseException($response);
    }
}




