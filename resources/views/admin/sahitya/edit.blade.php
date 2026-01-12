@extends('admin.app')
@section('styles') 
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">	
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('sahitya.saahity')}}  {{__('sahitya.saahity_edit')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					
						
					<form  id="sanghast_aaryika_form" action="{{ route('sahitya.update',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.name')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="name" value="{{(isset($data->name) ? $data->name : '') }}" name="name" placeholder="{{__('sahitya.enter_name')}}">
										@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
										@endif
									</div>
								</div>										
							</div>
							
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.category')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="category" >										
											<option  disabled selected >-- {{__('sahitya.choose_category')}} --</option>	
											@foreach($category_data as $val)
												<option value="{{$val->id}}" {{isset($data->category) && !empty($data->category) && $data->category == $val->id ?'selected':''}}>{{$val->name}}</option>
											@endforeach
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option  disabled selected >-- {{__('sahitya.choose_status')}} --</option>			
											<option value="1" {{isset($data->status) && !empty($data->status) && $data->status == 1 ?'selected':''}}>{{__('sahitya.active')}}</option>
											<option value="2" {{isset($data->status) && !empty($data->status) && $data->status == 2 ?'selected':''}}>{{__('sahitya.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>	
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">								
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.show_home')}}</label>
									<input class="ml-3" id="agreement" name="show_home" type="checkbox" value="1" {{ $data->show_home=="1" ? 'checked':'' }}>											
								</div>			
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.order')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="order" value="{{(isset($data->orders) ? $data->orders : '') }}" name="order" placeholder="{{__('sahitya.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif
									</div>
								</div>								
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.upload_type')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<div class="m-t-10">
											<div class="radio d-inline m-r-15">
												<input id="saahity1" name="file_type" value="1" type="radio"  {{ !isset($data->file_type) || $data->file_type == 1 ? 'checked' : ''  }}> 
												<label for="saahity1">{{__('sahitya.upload')}}</label>
											</div>
											<div class="radio d-inline m-r-15">
												<input id="saahity2" name="file_type" value="2" type="radio" cheaked {{ isset($data->file_type) && $data->file_type == 2 ? 'checked' : '' }}>
												<label for="saahity2">{{__('sahitya.url')}}</label>
											</div>
										</div>
										@if ($errors->has('file_type'))
											<span class="text-danger">{{ $errors->first('file_type') }}</span>
										@endif
									</div>
								</div> 		
							</div> 	
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.image')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="file" class="form-control" id="image" value="{{ old('image')}}" name="image">
										@if (isset($data->image) && !empty($data->image) && file_exists(public_path('frontend/images/sahitya/'.$data->image)))
											<img src="{{ asset('frontend/images/sahitya').'/'.$data->image }}"  alt="image" height="70">
										@endif
										@if ($errors->has('image'))
											<span class="text-danger">{{ $errors->first('image') }}</span>
										@endif
									</div>
								</div>
								<div class="col-lg-6 col-sm-12 ">
									<ul>
										<li class="text-danger">{{__('sahitya.image_type_allowed')}} </li>
										<li class="text-danger">{{__('sahitya.dimensions ')}} </li>
										<li class="text-danger">{{__('sahitya.maximum_image_size')}} </li>
									</ul>
								</div>
							</div>
							<div id="fileInputUrl" class="col-lg-6 col-sm-12"  style="display: none;">
								<div  class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.file')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="file" value="{{(isset($data->file) ? $data->file : '') }}"  name="file" placeholder="{{__('sahitya.enter_file_url')}}">
										@if ($errors->has('file'))
											<span class="text-danger">{{ $errors->first('file') }}</span>
										@endif
									</div>
								</div>	
							</div>	
							<div id="fileInputUpload" class="col-lg-6 col-sm-12"  style="display: none;">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.file')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="file" class="form-control" id="file"  value="{{ (isset($data->file) ? $data->file : '') }}" name="file" >
										@if ($errors->has('file'))
											<span class="text-danger">{{ $errors->first('file') }}</span>
										@endif
									</div>
								</div>
								<div class="col-lg-6 col-sm-12 ">
									<ul>
										<li class="text-danger">{{__('sahitya.file_type_allowed')}} </li>
										<li class="text-danger">{{__('sahitya.maximum_file_size')}} </li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sahitya.title')}} </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{(isset($data->title) ? $data->title : '') }}" name="title" placeholder="{{__('sahitya.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>										
							</div>
							<div class="col-lg-12">
								<div class="text-sm-right">
									<a href="{{route('sahitya.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var radioButtons = document.querySelectorAll('input[name="file_type"]');
        var fileInputUrl = document.getElementById('fileInputUrl');
        var fileInputUpload = document.getElementById('fileInputUpload');

        // Function to show/hide file input based on radio selection
        function toggleFileInput() {
            if (document.getElementById('saahity2').checked) {
                fileInputUrl.style.display = 'block';
                fileInputUpload.style.display = 'none';
            } else if (document.getElementById('saahity1').checked) {
                fileInputUrl.style.display = 'none';
                fileInputUpload.style.display = 'block';
            }
        }

        // Initial call to toggleFileInput
        toggleFileInput();

        // Add change event listener to radio buttons
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', toggleFileInput);
        });
    });
</script>
@endsection