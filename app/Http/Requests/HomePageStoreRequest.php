<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePageStoreRequest extends FormRequest
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
           
           /* 'literature_description' => 'required',
		   'first_suvichaar' => 'required',
		   'second_suvichaar' => 'required',
		   'third_suvichaar' => 'required',
		   'suvichar_image' => 'required', */
		   'youtube_video_title' => 'required', 
		   'youtube_video_url' => 'required', 
		   'thumbnail' => 'nullable|mimes:jpeg,png,jpg|max:10240',
		   
        ];
	/* 	if($this->hasfile('thumbnail')){
			 $rules['thumbnail']='required|mimes:jpeg,png,jpg|max:10240';
		} */
		if($this->hasfile('background_top_image')){
			 $rules['background_top_image']='required|mimes:jpeg,png,jpg|max:10240';
		}
		if($this->hasfile('banner_image')){
			 $rules['banner_image']='required|mimes:jpeg,png,jpg|max:10240';
		}
		if($this->hasfile('suvichar_background_image')){
			 $rules['suvichar_background_image']='required|mimes:jpeg,png,jpg|max:10240';
		}
		if($this->hasfile('suvichar_icon_image')){
			 $rules['suvichar_icon_image']='required|mimes:jpeg,png,jpg|max:10240';
		}
		return $rules;
		
    }
}




