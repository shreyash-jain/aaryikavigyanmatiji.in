@extends('admin.app')
@section('styles') 
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid"> 
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('gallery.add_image')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					<form  id="add_gallary_form" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('gallery.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{ old('title')}}" name="title" placeholder="{{__('gallery.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('gallery.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('gallery.choose_status')}} --</option>			
											<option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{__('gallery.active')}}</option>
											<option value="2" {{ old('status') == 2 ? 'selected' : '' }}>{{__('gallery.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>		
							
							<div class="col-lg-6 col-sm-12" >									
								<div  class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('gallery.image_url')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="image_url" value="{{ old('image_url')}}" name="image_url" placeholder="{{__('gallery.enter_image_url')}}">
										@if ($errors->has('image_url'))
											<span class="text-danger">{{ $errors->first('image_url') }}</span>
										@endif  
									</div>
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('gallery.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{ old('order')}}" name="order" placeholder="{{__('gallery.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif 
									</div>
								</div>								
							</div>	
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">								
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('gallery.is_new')}}</label>
										<input class="ml-3" id="agreement" name="is_new" value='1' type="checkbox" checked="">											
								</div>			
							</div>	
							<div class="col-lg-12">		
								<div class="text-sm-right">
									<a href="{{route('gallery.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
									<button type="submit" class="btn btn-gradient-primary ">{{__('button.submit')}}</button>
								</div>
							</div>																
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>	

@endsection
