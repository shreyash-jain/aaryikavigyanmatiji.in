@extends('admin.app')
@section('styles') 

@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">			
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('site_setting.site_setting')}}</h2>						
					</div>
				</div>
			
				@if(session()->has('success'))
					<div class="alert alert-success text-center">
						{{ session()->get('success') }}
					</div>	
				@endif
				@if(session()->has('error'))
					<div class="alert alert-danger text-center">
						{{ session()->get('error') }}
					</div>	
				@endif	
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="p-h-10">
								<form  id="site_form" action="{{ route('general_setting.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="form-group row">
									<input type="hidden" class="form-control" id="id" name="id" value="{{ (isset($data->id) ? $data->id : '')  }}" >
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.site_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="site_name" name="site_name" value="{{ old('site_name') . (isset($data->site_name) ? $data->site_name : '')  }}" placeholder=" {{__('site_setting.enter_site_name')}}">
											@if ($errors->has('site_name'))
												<span class="text-danger">{{ $errors->first('site_name') }}</span>
											@endif
										</div>
										
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.header_logo')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="header_logo" value="{{ old('header_logo') . (isset($data->header_logo) ? $data->header_logo : '') }}" name="header_logo" >
											@if (isset($data->header_logo) && !empty($data->header_logo) && file_exists(public_path('frontend/images/site/'.$data->header_logo)))
												<img src="{{ asset('frontend/images/site').'/'.$data->header_logo }}"  alt="Header Logo" height="70">
											@endif
											@if ($errors->has('header_logo'))
												<span class="text-danger">{{ $errors->first('header_logo') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.site_favicon')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="site_favicon" value="{{ old('site_favicon') . (isset($data->site_favicon) ? $data->site_favicon : '') }}" name="site_favicon" >
											@if (isset($data->site_favicon) && !empty($data->site_favicon) && file_exists(public_path('frontend/images/site/'.$data->site_favicon)))
											<img src="{{ asset('frontend/images/site').'/'.$data->site_favicon }}" alt="Site favicon" height="70">
										@endif
											@if ($errors->has('site_favicon'))
												<span class="text-danger">{{ $errors->first('site_favicon') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.email')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="email" name="email" value="{{ old('email') . (isset($data->email) ? $data->email : '') }}" placeholder="{{__('site_setting.enter_email')}}">
											@if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.footer_description')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="footer_description" rows="2"  placeholder="{{__('site_setting.enter_footer_description')}}" id="footer_description">{{ old('footer_description') . (isset($data->footer_description) ? $data->footer_description : '') }}</textarea>					
											@if ($errors->has('footer_description'))
												<span class="text-danger">{{ $errors->first('footer_description') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.site_keyword')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="site_keyword" rows="2"  placeholder="{{__('site_setting.email')}}Site Keyword" id="site_keyword">{{ old('site_keyword') . (isset($data->site_keyword) ? $data->site_keyword : '') }}</textarea>
											@if ($errors->has('site_keyword'))
												<span class="text-danger">{{ $errors->first('site_keyword') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.footer_log')}} </label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="footer_logo"  value="{{ old('footer_logo') . (isset($data->footer_logo) ? $data->footer_logo : '') }}" name="footer_logo">
											@if (isset($data->footer_logo) && !empty($data->footer_logo) && file_exists(public_path('frontend/images/site/'.$data->footer_logo)))
												<img src="{{ asset('frontend/images/site').'/'.$data->footer_logo }}"  alt="Footer Icon" height="70">
											@endif
											@if ($errors->has('footer_logo'))
												<span class="text-danger">{{ $errors->first('footer_logo') }}</span>
											@endif	
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-h-10">
									<div class="form-group row">	
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.copyright_text')}}<span class="text-danger">*</span></label>
										<div class="col-sm-9">				
											<textarea class="form-control" name="copyrigt_text" rows="2" placeholder="{{__('site_setting.enter_copyright_text')}}" id="copyrigt_text">{{ old('copyrigt_text') . (isset($data->copyrigt_text) ? $data->copyrigt_text : '') }}</textarea>					
											@if ($errors->has('copyrigt_text'))						
												<span class="text-danger">{{ $errors->first('copyrigt_text') }}</span>	
											@endif						
										</div>							
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.default_language')}}</label>
										<div class="col-sm-9">
											<div class="m-t-20">
												<div class="radio d-inline m-r-15">
													<input id="language1" name="language" value="0" type="radio" cheaked {{ !isset($data->defaut_language) || $data->defaut_language == 0 ? 'checked' : ''  }}> 
													<label for="language1">{{__('site_setting.hindi')}}</label>
												</div>
												<div class="radio d-inline m-r-15">
													<input id="language2" name="language" value="1" type="radio" {{ isset($data->defaut_language) && $data->defaut_language == 1 ? 'checked' : '' }}>
													<label for="language2">{{__('site_setting.english')}}</label>
												</div>
											</div>
										</div>
									</div> 
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.mobile_number')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mobile_number" value="{{ old('mobile_number') . (isset($data->mobile_number) ? $data->mobile_number : '') }}" name="mobile_number" placeholder="{{__('site_setting.enter_mobile_number')}}"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxLength="10" >
											@if ($errors->has('mobile_number'))
												<span class="text-danger">{{ $errors->first('mobile_number') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.second_mobile_number')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="second_mobile_number" value="{{ old('second_mobile_number') . (isset($data->mobile_number_1) ? $data->mobile_number_1 : '') }}" name="second_mobile_number" placeholder="{{__('site_setting.enter_second_mobile_number')}}"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxLength="10" >
										
										</div>
									</div>
									<div class="form-group row">	
										<label class="col-sm-3 col-form-label control-label">{{__('site_setting.address')}}<span class="text-danger">*</span></label>
										<div class="col-sm-9">				
											<textarea class="form-control" name="address" rows="2" placeholder="{{__('site_setting.enter_address')}}" id="address">{{ old('address') . (isset($data->address) ? $data->address : '') }}</textarea>					
											@if ($errors->has('address'))						
												<span class="text-danger">{{ $errors->first('address') }}</span>	
											@endif						
										</div>							
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.facebook_URL')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="facebook_url" value="{{ old('facebook_url') . (isset($data->facebook_url) ? $data->facebook_url : '') }}" name="facebook_url" placeholder="{{__('site_setting.enter_facebook_URL')}}">
											@if ($errors->has('facebook_url'))
												<span class="text-danger">{{ $errors->first('facebook_url') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.twitter_URL')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="twitter_url" value="{{ old('twitter_url') . (isset($data->twitter_url) ? $data->twitter_url : '') }}" name="twitter_url" placeholder="{{__('site_setting.enter_twitter_URL')}}">
											@if ($errors->has('twitter_url'))
												<span class="text-danger">{{ $errors->first('twitter_url') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.Instagram URL')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="instagram_url" value="{{ old('instagram_url') . (isset($data->instagram_url) ? $data->instagram_url : '') }}" name="instagram_url" placeholder="{{__('site_setting.enter_Instagram URL')}}">
											@if ($errors->has('instagram_url'))
												<span class="text-danger">{{ $errors->first('instagram_url') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.youtube_URL')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="youtube_url" value="{{ old('youtube_url') . (isset($data->youtube_url) ? $data->youtube_url : '') }}" name="youtube_url" placeholder="{{__('site_setting.enter_youtube_URL')}}">
											@if ($errors->has('youtube_url'))
												<span class="text-danger">{{ $errors->first('youtube_url') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('site_setting.whatsapp_url')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="whatsapp_url" value="{{ old('whatsapp_url') . (isset($data->whatsapp_url) ? $data->whatsapp_url : '') }}" name="whatsapp_url" placeholder="{{__('site_setting.enter_whatsapp_url')}}">
											@if ($errors->has('whatsapp_url'))
												<span class="text-danger">{{ $errors->first('whatsapp_url') }}</span>
											@endif
										</div>
									</div>
									
		<!--							<div class="form-group row">
										<label class="col-sm-2 col-form-label control-label text-sm-right">Gender</label>
										<div class="col-sm-10">
											<div class="m-t-10">
												<div class="radio d-inline m-r-15">
													<input id="horizontalFormRadio1" name="horizontalForm" type="radio" checked="">
													<label for="horizontalFormRadio1">Male</label>
												</div>
												<div class="radio d-inline m-r-15">
													<input id="horizontalFormRadio2" name="horizontalForm" type="radio">
													<label for="horizontalFormRadio2">Female</label>
												</div>
											</div>
										</div>
									</div>    -->
									
									<div class="text-sm-right">
										<a href="{{route('admin.dashboard')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
										<button type="submit" class="btn btn-gradient-primary">{{__('button.submit')}}</button>
									</div>
								</form>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

@endsection
@section('scripts') 

@endsection