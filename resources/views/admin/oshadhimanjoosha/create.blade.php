@extends('admin.app')
@section('styles') 
<link href="{{asset('backend\assets\vendor\summernote\dist\summernote-bs4.css')}}" rel="stylesheet" />
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid"> 
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('oshadhi.add_oshadhi')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					<form  id="add_oshadhi_form" action="{{ route('oshadhi_manjoosha.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('oshadhi.name')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="name" value="{{ old('name')}}" name="name" placeholder="{{__('oshadhi.enter_name')}}">
										@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
										@endif
									</div>
								</div>	
							</div>
							
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('oshadhi.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('oshadhi.choose_status')}} --</option>			
											<option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{__('oshadhi.active')}}</option>
											<option value="2" {{ old('status') == 2 ? 'selected' : '' }}>{{__('oshadhi.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>		
							
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('oshadhi.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{ old('order')}}" name="order" placeholder="{{__('oshadhi.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif 
									</div>
								</div>								
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">								
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.show_home')}}</label>
									<input class="ml-3" id="agreement" name="show_home" value='1' type="checkbox" >	 										
								</div>			
							</div>	
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('oshadhi.short_description')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<textarea class="form-control" maxlength="525" name="short_description" rows="3"  placeholder="{{__('oshadhi.enter_short_description')}}" id="short_description">{{ old('short_description')}}</textarea>
										@if ($errors->has('short_description'))
											<span class="text-danger">{{ $errors->first('short_description') }}</span>
										@endif
									</div>
								</div>	
							</div>
							<div class="form-group col-lg-12">
								<label class=" col-form-label control-label text-sm-right">{{__('oshadhi.description')}} <span class="text-danger">*</span></label>
								<div class="m-t-15">
									<textarea class="form-control" name="description" rows="3"  placeholder="{{__('oshadhi.enter_description')}}" id="summernote-standard">{{ old('description')}}</textarea>
								</div>	
								@if ($errors->has('description'))
									<span class="text-danger">{{ $errors->first('description') }}</span>
									@endif 								
							</div>

							
							<div class="col-lg-12">		
								<div class="text-sm-right">
									<a href="{{route('oshadhi_manjoosha.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
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
@section('scripts') 
<script src="{{asset('backend\assets\vendor\summernote\dist\summernote-bs4.min.js')}}"></script>
<script>	
	$(document).ready(function() {
	  $('#summernote-standard').summernote({
            height: 200,           
        });
    });
</script>
@endsection

