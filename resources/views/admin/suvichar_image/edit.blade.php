@extends('admin.app')
@section('styles') 
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">	
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title"> {{__('suvichar_image.edit_image')}}</h2>						
					</div>
				</div>
				<div class="card-body">					
					<form  id="gallery_form" action="{{ route('suvichar_image.update',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{(isset($data->title) ? $data->title : '') }}"  name="title" placeholder="{{__('gallery.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.type')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="type" >
											<option  disabled selected >-- {{__('suvichar_image.choose_type')}} --</option>			
											<option value="1" {{isset($data->type) && !empty($data->type) && $data->type == 1 ?'selected':''}}>{{__('suvichar_image.suvichar')}}</option>
											<option value="2" {{isset($data->type) && !empty($data->type) && $data->type == 2 ?'selected':''}}>{{__('suvichar_image.sanskar_manjusha')}}</option>
										</select>
										@if ($errors->has('type'))
											<span class="text-danger">{{ $errors->first('type') }}</span>
										@endif
									</div>	
								</div>	
							</div>		
							
							<div class="col-lg-6 col-sm-12" >									
								<div  class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.image_url')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="image_url" value="{{(isset($data->image_url) ? $data->image_url : '') }}"  name="image_url" placeholder="{{__('suvichar_image.enter_image_url')}}">
										@if ($errors->has('image_url'))
											<span class="text-danger">{{ $errors->first('image_url') }}</span>
										@endif  
									</div>
								</div>	
							</div>
							
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('suvichar_image.choose_status')}} --</option>			
											<option value="1" {{isset($data->status) && !empty($data->status) && $data->status == 1 ?'selected':''}}>{{__('suvichar_image.active')}}</option>
											<option value="2" {{isset($data->status) && !empty($data->status) && $data->status == 2 ?'selected':''}}>{{__('suvichar_image.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{(isset($data->orders) ? $data->orders : '') }}" name="order" placeholder="{{__('suvichar_image.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif 
									</div>
								</div>								
							</div>	
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">								
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('suvichar_image.show_home')}}</label>
										<input class="ml-3" id="agreement" name="show_home" type="checkbox" value="1" {{ $data->show_home=="1" ? 'checked':'' }} >											
								</div>			
							</div>	
							<div class="col-lg-12">		
								<div class="text-sm-right">
									<a href="{{route('suvichar_image.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
									<button type="submit" class="btn btn-gradient-primary ">{{__('button.submit')}}</button>
								</div>
							</div>																
						</div
					</form>	
				</div>
			</div>
		</div>
	</div>	

@endsection

