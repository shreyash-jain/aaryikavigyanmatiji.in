@extends('admin.app')
@section('styles') 
<link href="{{asset('backend\assets\vendor\bootstrap-datepicker\dist\css\bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('pravachan_video.pravachan_video')}}  {{__('pravachan_video.pravachan_video_add')}}</h2>						
					</div>
				</div>
				<div class="card-body">					
					<form  id="sanghast_aaryika_form" action="{{ route('pravachan_video.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{ old('title')}}" name="title" placeholder="{{__('pravachan_video.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>	
							<div class="col-lg-6 col-sm-12">										
								<div class="form-group row">		
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.url_slug')}} <span class="text-danger">*</span></label>		
									<div class="col-sm-9">			
										<input type="text" class="form-control" id="url" value="{{ old('url')}}" name="url" placeholder="{{__('pravachan_video.enter_url_slug')}}">		
										@if ($errors->has('url'))		
											<span class="text-danger">{{ $errors->first('url') }}</span>		
										@endif			
									</div>		
								</div>
							</div>	
							
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('pravachan_video.choose_status')}} --</option>			
											<option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{__('pravachan_video.active')}}</option>
											<option value="2" {{ old('status') == 2 ? 'selected' : '' }}>{{__('pravachan_video.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">	
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.video_type')}}<span class="text-danger">*</span></label><br>		
									<div class="col-sm-9">	
										<select class="form-control" id="selectize-dropdown" name="video_type" >		
											<option  disabled selected >-- {{__('pravachan_video.choose_video_type')}} --</option>				
											<option value="1" {{ old('video_type') == 1 ? 'selected' : '' }}>{{__('pravachan_video.pravachan')}}</option>	
											<option value="2" {{ old('video_type') == 2 ? 'selected' : '' }}>{{__('pravachan_video.vidhaan')}}</option>	
											<option value="3" {{ old('video_type') == 3 ? 'selected' : '' }}>{{__('pravachan_video.other')}}</option>	
										</select>		
										@if ($errors->has('video_type'))		
											<span class="text-danger">{{ $errors->first('video_type') }}</span>		
										@endif	
									</div>	
								</div>							
							</div>	
							
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{ old('order')}}" name="order" placeholder="{{__('pravachan_video.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif 
									</div>
								</div>								
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_audio.date')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<div class="icon-input">
											<i class="mdi mdi-timer"></i>
											<input  id="datepicker-1"  data-provide="datepicker" name="date"  type="text" class="form-control dateformate" placeholder="{{__('pravachan_audio.enter_date')}}">
										</div>
										@if ($errors->has('date'))
											<span class="text-danger">{{ $errors->first('date') }}</span>
										@endif
									</div>
								</div>
							</div>	
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">	
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('pravachan_video.thumbnail')}} <span class="text-danger">*</span></label>	
									<div class="col-sm-9">											<input type="file" class="form-control" id="thumbnail" value="{{ old('thumbnail') }}" name="thumbnail" }}">			
										@if ($errors->has('thumbnail'))			
											<span class="text-danger">{{ $errors->first('thumbnail') }}</span>				
										@endif	
										
										<ul>
    										<li class="text-dark">{{__('pravachan_video.file_type_allowed')}} </li>
    										<li class="text-dark">{{__('pravachan_video.dimensions ')}} </li>
    										<li class="text-dark">{{__('pravachan_video.maximum_file_size')}} </li>
								    	</ul>
									</div>			
								</div>	
								
							</div>
							<div class="col-lg-12">		
								<div class="text-sm-right">
									<a href="{{route('admin.dashboard')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
									<button type="submit" class="btn btn-gradient-primary">{{__('button.submit')}}</button>
								</div>
											
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	

@endsection
@section('scripts') 
<script type="text/javascript">
    $(document).ready(function(){
        $('.dateformate').datepicker({
             format: 'dd-mm-yyyy', 
        });
    });
</script>
<script src="{{asset('backend\assets\vendor\bootstrap-datepicker\dist\js\bootstrap-datepicker.js')}}"></script>

@endsection