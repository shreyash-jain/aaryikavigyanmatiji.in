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
						<h2 class="card-title">{{__('classes.classes')}}  {{__('classes.classes_edit')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					
					<form  id="classes_form" action="{{ route('classes.update',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{(isset($data->title) ? $data->title : '') }}" name="title" placeholder="{{__('classes.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>	
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">	
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.url_slug')}} <span class="text-danger">*</span></label>	
									<div class="col-sm-9">	
									<input type="text" class="form-control" id="url_slug" value="{{(isset($data->url_slug) ? $data->url_slug : '') }}" name="url_slug" placeholder="{{__('classes.enter_url_slug')}}">			
									@if ($errors->has('url_slug'))		
										<span class="text-danger">{{ $errors->first('url_slug') }}</span>		
									@endif		
									</div>		
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('pravachan_video.choose_status')}} --</option>			
											<option value="1" {{isset($data->status) && !empty($data->status) && $data->status == 1 ?'selected':''}}>{{__('classes.active')}}</option>
											<option value="2" {{isset($data->status) && !empty($data->status) && $data->status == 2 ?'selected':''}}>{{__('classes.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.type')}}<span class="text-danger">*</span></label><br>		
									<div class="col-sm-9">			
									<select class="form-control" id="selectize-dropdown" name="type" >				
										<option  disabled selected >-- {{__('pravachan_video.choose_type')}} --</option>			
										<option value="1" {{isset($data->type) && !empty($data->type) && $data->type == 1 ?'selected':''}}>{{__('classes.video')}}</option>		
										<option value="2" {{isset($data->type) && !empty($data->type) && $data->type == 2 ?'selected':''}}>{{__('classes.audio')}}</option>				
									</select>
									@if ($errors->has('type'))				
										<span class="text-danger">{{ $errors->first('type') }}</span>			
									@endif					
									</div>				
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.date')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<div class="icon-input">
											<i class="mdi mdi-timer"></i>
											<input id="datepicker-1"  data-provide="datepicker" name="date" type="text" value="{{(isset($data->date) ?  \Carbon\Carbon::parse($data->date)->format('d-m-Y')  : '') }}" class="form-control dateformate" placeholder="{{__('pravachan_video.enter_date')}}">
										</div>
										@if ($errors->has('date'))
											<span class="text-danger">{{ $errors->first('date') }}</span>
										@endif
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{(isset($data->order) ? $data->order : '') }}" name="order" placeholder="{{__('classes.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif
									</div>
								</div>								
							</div>
							
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">			
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('classes.thumbnail')}} <span class="text-danger">*</span></label>				
									<div class="col-sm-9">					
										<input type="file" class="form-control" id="thumbnail" value="{{(isset($data->thumbnail) ? $data->thumbnail : '') }}" name="thumbnail">				
										@if (isset($data->thumbnail) && !empty($data->thumbnail) && file_exists(public_path('frontend/images/thumbnails/'.$data->thumbnail)))					
											<img src="{{ asset('frontend/images/thumbnails').'/'.$data->thumbnail }}"  alt="Header Logo" height="70">					
										@endif					
										@if ($errors->has('thumbnail'))			
											<span class="text-danger">{{ $errors->first('thumbnail') }}</span>		
										@endif					
									</div>		
								</div>
								<div class="col-lg-6 col-sm-12">  
									<ul>
										<li class="text-danger">{{__('classes.file_type_allowed')}} </li>
										<li class="text-danger">{{__('classes.dimensions ')}} </li>
										<li class="text-danger">{{__('classes.maximum_file_size')}} </li>
									</ul>
								</div>								
							</div>	
							
							<div class="col-lg-12">
								<div class="text-sm-right">
									<a href="{{route('classes.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
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