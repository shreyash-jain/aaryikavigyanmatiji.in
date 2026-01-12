@extends('admin.app')
@section('styles') 
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid"> 
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('meta_data.add_meta_data')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					<form  id="add_gallary_form" action="{{ route('meta_data.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('meta_data.name')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="page_name" >
											<option  disabled selected >-- {{__('meta_data.choose_name')}} --</option>	
											@foreach($url_data as $key=>$val)
											<option value="{{$val->url}}" {{ old('page_name') == $val->url ? 'selected' : '' }}>{{$val->name}}</option>
											@endforeach
										</select>
										@if ($errors->has('page_name'))
											<span class="text-danger">{{ $errors->first('page_name') }}</span>
										@endif
									</div>	
								</div>	  
							</div>	
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('meta_data.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{ old('title')}}" name="title" placeholder="{{__('meta_data.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>
							
							<div class="col-lg-6 col-sm-12" >									
								<div  class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('meta_data.keywords')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="keywords" value="{{ old('keywords')}}" name="keywords" placeholder="{{__('meta_data.enter_keywords')}}">
										@if ($errors->has('keywords'))
											<span class="text-danger">{{ $errors->first('keywords') }}</span>
										@endif  
									</div>
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12" >									
								<div  class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('meta_data.description')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="description" value="{{ old('description')}}" name="description" placeholder="{{__('meta_data.enter_description')}}">
										@if ($errors->has('description'))
											<span class="text-danger">{{ $errors->first('description') }}</span>
										@endif  
									</div>
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('meta_data.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('meta_data.choose_status')}} --</option>			
											<option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{__('meta_data.active')}}</option>
											<option value="2" {{ old('status') == 2 ? 'selected' : '' }}>{{__('meta_data.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
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
