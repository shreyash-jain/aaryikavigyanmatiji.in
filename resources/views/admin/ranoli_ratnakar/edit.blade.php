@extends('admin.app')
@section('styles') 
@endsection

@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">	
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('ranoli_ratnakar.ranoli_ratnakar')}}  {{__('ranoli_ratnakar.ranoli_ratnakar_edit')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					
					<form  id="ranoli_ratnakar_form" action="{{ route('ranoli-ratnakar.update',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					{{ method_field('PUT') }}
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.title')}} <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="title" value="{{(isset($data->title) ? $data->title : '') }}" name="title" placeholder="{{__('ranoli_ratnakar.enter_title')}}">
										@if ($errors->has('title'))
											<span class="text-danger">{{ $errors->first('title') }}</span>
										@endif
									</div>
								</div>	
							</div>	
							<div class="col-lg-6 col-sm-12">	
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.status')}}<span class="text-danger">*</span></label><br>
									<div class="col-sm-9">
										<select class="form-control" id="selectize-dropdown" name="status" >
											<option value="1" {{isset($data->status) && !empty($data->status) && $data->status == 1 ?'selected':''}}>{{__('ranoli_ratnakar.active')}}</option>
											<option value="2" {{isset($data->status) && !empty($data->status) && $data->status == 2 ?'selected':''}}>{{__('ranoli_ratnakar.unactive')}}</option>
										</select>
										@if ($errors->has('status'))
											<span class="text-danger">{{ $errors->first('status') }}</span>
										@endif
									</div>	
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">	
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.url_slug')}} <span class="text-danger">*</span></label>	
									<div class="col-sm-9">	
									<input type="text" class="form-control" id="url_slug" value="{{(isset($data->url_slug) ? $data->url_slug : '') }}" name="url_slug" placeholder="{{__('ranoli_ratnakar.enter_url_slug')}}">			
									@if ($errors->has('url_slug'))		
										<span class="text-danger">{{ $errors->first('url_slug') }}</span>		
									@endif		
									</div>		
								</div>	
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.type')}}<span class="text-danger">*</span></label><br>		
									<div class="col-sm-9">			
									<select class="form-control" id="selectize-dropdown" name="type" >				
										<option  disabled selected >-- {{__('ranoli_ratnakar.choose_type')}} --</option>			
										<option value="1" {{isset($data->type) && !empty($data->type) && $data->type == 1 ?'selected':''}}>{{__('ranoli_ratnakar.photo')}}</option>		
										<option value="2" {{isset($data->type) && !empty($data->type) && $data->type == 2 ?'selected':''}}>{{__('ranoli_ratnakar.video')}}</option>				
									</select>
									@if ($errors->has('type'))				
										<span class="text-danger">{{ $errors->first('type') }}</span>			
									@endif					
									</div>				
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.order')}} </label>
									<div class="col-sm-9">
										<input type="number" class="form-control" id="order" value="{{(isset($data->order) ? $data->order : '') }}" name="order" placeholder="{{__('ranoli_ratnakar.enter_order')}}">
										@if ($errors->has('order'))
											<span class="text-danger">{{ $errors->first('order') }}</span>
										@endif
									</div>
								</div>								
							</div>
							
							<div class="col-lg-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('ranoli_ratnakar.description')}} </label>
									<div class="col-sm-9">
										<textarea type="text" class="form-control" id="description"  name="description" placeholder="{{__('ranoli_ratnakar.enter_description')}}">{{(isset($data->description) ? $data->description : '') }}</textarea>
										@if ($errors->has('description'))
											<span class="text-danger">{{ $errors->first('description') }}</span>
										@endif 
									</div>
								</div>								
							</div>
							<div class="col-lg-12">
								<div class="text-sm-right">
									<a href="{{route('ranoli-ratnakar.index')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
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

@endsection