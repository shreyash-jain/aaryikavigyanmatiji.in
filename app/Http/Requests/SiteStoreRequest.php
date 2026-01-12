<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteStoreRequest extends FormRequest
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
        $rules= [
           'site_name' 			=> 'required',
           'email' 				=> 'required',
           'site_keyword' 		=> 'required',
           'copyrigt_text' 		=> 'required',
           'mobile_number' 		=> 'required|size:10',
           'facebook_url' 		=> 'required',
           'twitter_url' 		=> 'required',
           'instagram_url' 		=> 'required',
           'youtube_url' 		=> 'required',           'whatsapp_url' 		=> 'required',           'address' 		=> 'required',
           'footer_description' => 'required',		   			'footer_logo'       => 'nullable|mimes:jpeg,png,jpg|max:10240',
		     
        ];
		if($this->hasfile('header_logo')){
			 $rules['header_logo']='required|mimes:jpeg,png,jpg|max:10240';
		}
		if($this->hasfile('site_favicon')){
			 $rules['site_favicon']='required|mimes:jpeg,png,jpg|max:10240';
		}
		return $rules;
		
    }
}




