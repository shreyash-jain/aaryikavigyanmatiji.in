<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
			'password' => 'required',
        ];
    }
	
	public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->validatePassword($validator);
        });
    }
	
	protected function validatePassword($validator)
    {
		$email = $this->input('email');
        $password = $this->input('password');
        $user = User::where('email', $email)->first();
        if($user){
			if (!Hash::check($password, $user->password)) {
				$validator->errors()->add('password', 'Passwords do not match.');
			}
        }
    }
	
}