@extends('admin.app')
@section('styles') 
	<style>
		
    </style>
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">			
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('sanghast_aaryika.sanghast_brahmacharya_sisters')}}  {{__('sanghast_aaryika.sanghast_aaryika_edit')}}</h2>						
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
								<form  id="sanghast_aaryika_form" action="{{ route('sanghasth_brahmachary_bahane.update',$data->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mata_ji_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" value="{{(isset($data->name) ? $data->name : '')  }}" placeholder=" {{__('sanghast_aaryika.enter_mata_ji_name')}}">
											@if ($errors->has('name'))
												<span class="text-danger">{{ $errors->first('name') }}</span>
											@endif
										</div>
										
									</div>
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.old_name')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="old_name" name="old_name" value="{{(isset($data->old_name) ? $data->old_name : '') }}" placeholder="{{__('sanghast_aaryika.old_name')}}">
											@if ($errors->has('old_name'))
												<span class="text-danger">{{ $errors->first('old_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.father_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="father_name" rows="2"  placeholder="{{__('sanghast_aaryika.enter_father_name')}}" id="father_name" value="{{(isset($data->father_name) ? $data->father_name : '') }}">					
											@if ($errors->has('father_name'))
												<span class="text-danger">{{ $errors->first('father_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mother_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="mother_name" rows="2"  placeholder="{{__('sanghast_aaryika.enter_mother_name')}}" id="mother_name" value="{{(isset($data->mother_name) ? $data->mother_name : '') }}">
											@if ($errors->has('mother_name'))
												<span class="text-danger">{{ $errors->first('mother_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.brother_sister')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="brother_sister" rows="2" placeholder="{{__('sanghast_aaryika.enter_brother_sister')}}" id="brother_sister" value="{{(isset($data->brother_sister) ? $data->brother_sister : '') }}">
											@if ($errors->has('brother_sister'))
												<span class="text-danger">{{ $errors->first('brother_sister') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.husband_name')}}</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="husband_name" value="{{(isset($data->husband_name) ? $data->husband_name : '') }}" name="husband_name" placeholder="{{__('sanghast_aaryika.enter_husband_name')}}" >
											@if ($errors->has('husband_name'))
												<span class="text-danger">{{ $errors->first('husband_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.date_of_birth')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="date_of_birth" value="{{(isset($data->date_of_birth) ? $data->date_of_birth : '') }}" name="date_of_birth" placeholder="{{__('sanghast_aaryika.enter_date_of_birth')}}"  >
										
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.birth_place')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="birth_place" value="{{(isset($data->birth_place) ? $data->birth_place : '') }}" name="birth_place" placeholder="{{__('sanghast_aaryika.enter_birth_place')}}">
											@if ($errors->has('birth_place'))
												<span class="text-danger">{{ $errors->first('birth_place') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.secular_education')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="secular_education" value="{{(isset($data->secular_education) ? $data->secular_education : '') }}" name="secular_education" placeholder="{{__('sanghast_aaryika.enter_secular_education')}}">
											@if ($errors->has('secular_education'))
												<span class="text-danger">{{ $errors->first('secular_education') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.marriage_date')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="marriage" value="{{(isset($data->marriage) ? $data->marriage : '') }}" name="marriage" placeholder="{{__('sanghast_aaryika.enter_marriage_date')}}">
											@if ($errors->has('marriage'))
												<span class="text-danger">{{ $errors->first('marriage') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.vrat_guru')}}  </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="vrat_guru" value="{{ (isset($data->vrat_guru) ? $data->vrat_guru : '') }}" name="vrat_guru" placeholder="{{__('sanghast_aaryika.enter_vrat_guru')}}">
											@if ($errors->has('vrat_guru'))
												<span class="text-danger">{{ $errors->first('vrat_guru') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.brahmacharya_vrat')}}</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="brahmacharya_vrat" value="{{(isset($data->brahmacharya_vrat) ? $data->brahmacharya_vrat : '') }}" name="brahmacharya_vrat" placeholder="{{__('sanghast_aaryika.enter_brahmacharya_vrat')}}">
											@if ($errors->has('brahmacharya_vrat'))
												<span class="text-danger">{{ $errors->first('brahmacharya_vrat') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.homelessness')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="homelessness" value="{{(isset($data->homelessness) ? $data->homelessness : '') }}" name="homelessness" placeholder="{{__('sanghast_aaryika.enter_homelessness')}}">
											@if ($errors->has('homelessness'))
												<span class="text-danger">{{ $errors->first('homelessness') }}</span>
											@endif
										</div>
									</div>									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.holding_the_statue')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="holding_the_statue" value="{{(isset($data->holding_the_statue) ? $data->holding_the_statue : '') }}" name="holding_the_statue" placeholder="{{__('sanghast_aaryika.enter_holding_the_statue')}}">
											@if ($errors->has('holding_the_statue'))
												<span class="text-danger">{{ $errors->first('holding_the_statue') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.image')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="image" value="{{(isset($data->image) ? $data->image : '') }}" name="image" >
											@if (isset($data->image) && !empty($data->image) && file_exists(public_path('frontend/images/aaryika/'.$data->image)))
												<img src="{{ asset('frontend/images/aaryika').'/'.$data->image }}"  alt="Header Logo" height="70">
											@endif
											@if ($errors->has('image'))
												<span class="text-danger">{{ $errors->first('image') }}</span>
											@endif
											<ul>
												<li class="text-danger">{{__('sanghast_aaryika.image_type_allowed')}} </li>
												<li class="text-danger">{{__('sanghast_aaryika.dimensions')}} </li>
												<li class="text-danger">{{__('sanghast_aaryika.maximum_image_size')}} </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-h-10">
									
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.aaryika_diksha')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="aryika_diksha" value="{{(isset($data->aryika_diksha) ? $data->aryika_diksha : '') }}" name="aryika_diksha" placeholder="{{__('sanghast_aaryika.enter_aaryika_diksha')}}">
											@if ($errors->has('aryika_diksha'))
												<span class="text-danger">{{ $errors->first('aryika_diksha') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.diksha_detail')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="diksha_detail" value="{{(isset($data->diksha_detail) ? $data->diksha_detail : '') }}" name="diksha_detail" placeholder="{{__('sanghast_aaryika.enter_diksha_detail')}}">
											@if ($errors->has('diksha_detail'))
												<span class="text-danger">{{ $errors->first('diksha_detail') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.initiation_guru')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="initiation_guru" value="{{ (isset($data->initiation_guru) ? $data->initiation_guru : '') }}" name="initiation_guru" placeholder="{{__('sanghast_aaryika.enter_initiation_guru')}}">
											@if ($errors->has('initiation_guru'))
												<span class="text-danger">{{ $errors->first('initiation_guru') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.interests')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="interests" value="{{(isset($data->interests) ? $data->interests : '') }}" name="interests" placeholder="{{__('sanghast_aaryika.enter_interests')}}">
											@if ($errors->has('interests'))
												<span class="text-danger">{{ $errors->first('interests') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.specialty')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="specialty" value="{{(isset($data->specialty) ? $data->specialty : '') }}" name="specialty" placeholder="{{__('sanghast_aaryika.enter_specialty')}}">
											@if ($errors->has('specialty'))
												<span class="text-danger">{{ $errors->first('specialty') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.initiated_disciples')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="initiated_disciples" value="{{(isset($data->initiated_disciples) ? $data->initiated_disciples : '') }}" name="initiated_disciples" placeholder="{{__('sanghast_aaryika.enter_initiated_disciples')}}">
											@if ($errors->has('initiated_disciples'))
												<span class="text-danger">{{ $errors->first('initiated_disciples') }}</span>
											@endif
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.url_slug')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="url_slug" value="{{(isset($data->url_slug) ? $data->url_slug : '') }}" name="url_slug" placeholder="{{__('sanghast_aaryika.enter_url_slug')}}">
											@if ($errors->has('url_slug'))
												<span class="text-danger">{{ $errors->first('url_slug') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.current_conflict')}}</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="current_conflict" value="{{(isset($data->current_conflict) ? $data->current_conflict : '') }}" name="current_conflict" placeholder="{{__('sanghast_aaryika.enter_current_conflict')}}">
											@if ($errors->has('current_conflict'))
												<span class="text-danger">{{ $errors->first('current_conflict') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mother_tongue')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mother_tongue" value="{{(isset($data->mother_tongue) ? $data->mother_tongue : '') }}" name="mother_tongue" placeholder="{{__('sanghast_aaryika.enter_mother_tongue')}}">
											@if ($errors->has('mother_tongue'))
												<span class="text-danger">{{ $errors->first('mother_tongue') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.serial_number')}}  <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="serial_number" value="{{(isset($data->serial_number) ? $data->serial_number : '') }}" name="serial_number" placeholder="{{__('sanghast_aaryika.enter_serial_number')}}">
											@if ($errors->has('serial_number'))
												<span class="text-danger">{{ $errors->first('serial_number') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mausoleum')}}</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mausoleum" value="{{ (isset($data->mausoleum) ? $data->mausoleum : '') }}" name="mausoleum" placeholder="{{__('sanghast_aaryika.enter_mausoleum')}}">
											@if ($errors->has('mausoleum'))
												<span class="text-danger">{{ $errors->first('mausoleum') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.pratimae')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="pratimae" value="{{ (isset($data->pratimae) ? $data->pratimae : '') }}" name="pratimae" placeholder="{{__('sanghast_aaryika.enter_pratimae')}}">
											@if ($errors->has('pratimae'))
												<span class="text-danger">{{ $errors->first('pratimae') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.pratham_kenshaloch')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="pratham_kenshaloch" value="{{(isset($data->pratham_kenshaloch) ? $data->pratham_kenshaloch : '') }}" name="pratham_kenshaloch" placeholder="{{__('sanghast_aaryika.enter_pratham_kenshaloch')}}">
											@if ($errors->has('pratham_kenshaloch'))
												<span class="text-danger">{{ $errors->first('pratham_kenshaloch') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.date_place')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="date_place" value="{{ (isset($data->date_place) ? $data->date_place : '') }}" name="date_place" placeholder="{{__('sanghast_aaryika.enter_date_place')}}">
											@if ($errors->has('date_place'))
												<span class="text-danger">{{ $errors->first('date_place') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.description')}} </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="text" rows="2"  placeholder="{{__('sanghast_aaryika.enter_description')}}" id="text">{{ (isset($data->description) ? $data->description : '') }}</textarea>
										</div>
									</div>
									<div class="text-sm-right">
										<a href="{{route('sanghasth_brahmachary_bahane.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
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