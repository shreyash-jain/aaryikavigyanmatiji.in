@extends('admin.app')
@section('styles') 
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">				<div class="container px-0">					<div class="card-header ">						<h2 class="card-title">{{__('home_page.home_page_setting')}}</h2>											</div>				</div>
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
								<form  id="home_form" action="{{ route('home_page.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
									<input type="hidden" class="form-control" id="id" name="id" value="{{ (isset($data->id) ? $data->id : '')  }}" >
					<!--				<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.background_top_image')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="background_top_image" value="{{ old('background_top_image') . (isset($data->background_top_image) ? $data->background_top_image : '') }}" name="background_top_image" placeholder="Background top image ">
											@if (isset($data->background_top_image) && !empty($data->background_top_image) && file_exists(public_path('frontend/images/home_page/'.$data->background_top_image)))
												<img src="{{ asset('frontend/images/home_page').'/'.$data->background_top_image }}"  alt="Header Logo" height="70">
											@endif
											@if ($errors->has('background_top_image'))
												<span class="text-danger">{{ $errors->first('background_top_image') }}</span>
											@endif
										</div>
									</div>	   -->
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.banner_image')}}  <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="banner_image" value="{{ old('banner_image') . (isset($data->banner_image) ? $data->banner_image : '') }}" name="banner_image" placeholder="{{__('home_page.enter_banner_image')}}">
											@if (isset($data->banner_image) && !empty($data->banner_image) && file_exists(public_path('frontend/images/home_page/'.$data->banner_image)))
												<img src="{{ asset('frontend/images/home_page').'/'.$data->banner_image }}"  alt="banner_image" height="70">
											@endif
											@if ($errors->has('banner_image'))
												<span class="text-danger">{{ $errors->first('banner_image') }}</span>
											@endif
										</div>
									</div>
									
						<!--			<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.suvichar_icon_image')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="suvichar_icon_image" value="{{ old('suvichar_icon_image') . (isset($data->suvichar_icon_image) ? $data->suvichar_icon_image : '') }}" name="suvichar_icon_image" >
											@if (isset($data->suvichar_icon_image) && !empty($data->suvichar_icon_image) && file_exists(public_path('frontend/images/home_page/'.$data->suvichar_icon_image)))
												<img src="{{ asset('frontend/images/home_page').'/'.$data->suvichar_icon_image }}"  alt="suvichar_icon_image" height="70">
											@endif
											@if ($errors->has('suvichar_icon_image'))
												<span class="text-danger">{{ $errors->first('suvichar_icon_image') }}</span>
											@endif
										</div>
									</div>										
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.suvichar_background_image')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="suvichar_background_image" value="{{ old('suvichar_background_image') . (isset($data->suvichar_background_image) ? $data->suvichar_background_image : '') }}" name="suvichar_background_image" >
											@if (isset($data->suvichar_background_image) && !empty($data->suvichar_background_image) && file_exists(public_path('frontend/images/home_page/'.$data->suvichar_background_image)))
												<img src="{{ asset('frontend/images/home_page').'/'.$data->suvichar_background_image }}"  alt="suvichar_background_image" height="70">
											@endif
											@if ($errors->has('suvichar_background_image'))
												<span class="text-danger">{{ $errors->first('suvichar_background_image') }}</span>
											@endif
										</div>
									</div>   -->
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.thumbnail')}} </label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="thumbnail" value="{{ old('thumbnail') . (isset($data->thumbnail) ? $data->thumbnail : '') }}" name="thumbnail" >
											@if (isset($data->thumbnail) && !empty($data->thumbnail) && file_exists(public_path('frontend/images/home_page/'.$data->thumbnail)))
												<img src="{{ asset('frontend/images/home_page').'/'.$data->thumbnail }}"  alt="thumbnail" height="70">
											@endif
											@if ($errors->has('thumbnail'))
												<span class="text-danger">{{ $errors->first('thumbnail') }}</span>
											@endif
										</div>
										<div class="col-lg-6 col-sm-12 text-red">
											<ul>
												<li class="text-danger">{{__('home_page.file_type_allowed')}} </li>
												<li class="text-danger">{{__('home_page.dimensions ')}} </li>
												<li class="text-danger">{{__('home_page.maximum_file_size')}} </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-h-10">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.youtube_video_title')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="youtube_video_title"    placeholder="{{__('home_page.enter_youtube_video_title')}}" value="{{(isset($data->youtube_video_title) ? $data->youtube_video_title : '') }}" id="youtube_video_title"></input>
											@if ($errors->has('youtube_video_title'))
												<span class="text-danger">{{ $errors->first('youtube_video_title') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.youtube_video_url')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="youtube_video_url"    placeholder="{{__('home_page.enter_youtube_video_url')}}" value="{{(isset($data->youtube_video_url) ? $data->youtube_video_url : '') }}" id="youtube_video_url"></input>
											@if ($errors->has('youtube_video_url'))
												<span class="text-danger">{{ $errors->first('youtube_video_url') }}</span>
											@endif
										</div>
									</div>
							<!--		<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.suvichaar1')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="first_suvichaar" rows="2"  placeholder="{{__('home_page.enter_suvichaar1')}}" id="first_suvichaar">{{ old('first_suvichaar') . (isset($data->first_suvichaar) ? $data->first_suvichaar : '') }}</textarea>
											@if ($errors->has('first_suvichaar'))
												<span class="text-danger">{{ $errors->first('first_suvichaar') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.suvichaar2')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="second_suvichaar" rows="2"  placeholder="{{__('home_page.enter_suvichaar2')}}" id="second_suvichaar">{{ old('second_suvichaar') . (isset($data->second_suvichaar) ? $data->second_suvichaar : '') }}</textarea>
											@if ($errors->has('second_suvichaar'))
												<span class="text-danger">{{ $errors->first('second_suvichaar') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.suvichaar3')}}<span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="third_suvichaar" rows="2"  placeholder="{{__('home_page.enter_suvichaar3')}}" id="third_suvichaar">{{ old('third_suvichaar') . (isset($data->third_suvichaar) ? $data->third_suvichaar : '') }}</textarea>
											@if ($errors->has('third_suvichaar'))
												<span class="text-danger">{{ $errors->first('third_suvichaar') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-sm-3 col-form-label">{{__('home_page.suvichaar_images')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">    
											<select multiple="" name="suvichar_image[]" class="form-control">
												@foreach($image_data as $val)
													<option value="{{ $val->title }}" {{ isset($data->suvichar_image) && is_array($data->suvichar_image) && in_array($val->title, $data->suvichar_image) ? 'selected' : '' }}>
														{{ $val->title }}
													</option>
												@endforeach
											</select>
											@if ($errors->has('suvichar_image'))
												<span class="text-danger">{{ $errors->first('suvichar_image') }}</span>
											@endif
										</div>
									</div>   
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label">{{__('home_page.literature_description')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="literature_description" rows="2"  placeholder="Literature Description" id="literature_description">{{ old('literature_description') . (isset($data->literature_description) ? $data->literature_description : '') }}</textarea>					
											@if ($errors->has('literature_description'))
												<span class="text-danger">{{ $errors->first('literature_description') }}</span>
											@endif
										</div>
									</div>   -->
									
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