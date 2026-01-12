@extends('admin.app')
@section('styles') 
	<style>
        .form-label {
            font-weight: bold;
        }
		
    </style>
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h2 class="card-title">{{__('sanghast_aaryika.sanghast_aaryika')}}  {{__('sanghast_aaryika.sanghast_aaryika_add')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="p-h-10">
								<form  id="sanghast_aaryika_form" action="{{ route('sanghast_aaryika.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mata_ji_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mata_ji_name" name="mata_ji_name" value="{{ old('mata_ji_name') . (isset($data->mata_ji_name) ? $data->mata_ji_name : '')  }}" placeholder=" {{__('sanghast_aaryika.enter_mata_ji_name')}}">
											@if ($errors->has('mata_ji_name'))
												<span class="text-danger">{{ $errors->first('mata_ji_name') }}</span>
											@endif
										</div>
										
									</div>
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.old_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="old_name" name="old_name" value="{{ old('old_name') . (isset($data->old_name) ? $data->old_name : '') }}" placeholder="{{__('sanghast_aaryika.old_name')}}">
											@if ($errors->has('old_name'))
												<span class="text-danger">{{ $errors->first('old_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.father_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="father_name" rows="2"  placeholder="{{__('sanghast_aaryika.enter_father_name')}}" id="father_name" value="{{ old('father_name') . (isset($data->father_name) ? $data->father_name : '') }}">					
											@if ($errors->has('father_name'))
												<span class="text-danger">{{ $errors->first('father_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mother_name')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="mother_name" rows="2"  placeholder="{{__('sanghast_aaryika.enter_mother_name')}}" id="mother_name" value="{{ old('mother_name') . (isset($data->mother_name) ? $data->mother_name : '') }}">
											@if ($errors->has('mother_name'))
												<span class="text-danger">{{ $errors->first('mother_name') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.brother_sister')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="brother_sister" rows="2" placeholder="{{__('sanghast_aaryika.enter_brother_sister')}}" id="brother_sister" value="{{ old('brother_sister') . (isset($data->brother_sister) ? $data->brother_sister : '') }}">
											@if ($errors->has('brother_sister'))
												<span class="text-danger">{{ $errors->first('brother_sister') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.husband_name')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="husband_name" value="{{ old('husband_name') . (isset($data->husband_name) ? $data->husband_name : '') }}" name="husband_name" placeholder="{{__('sanghast_aaryika.enter_husband_name')}}" >
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.date_of_birth')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="date_of_birth" value="{{ old('date_of_birth') . (isset($data->date_of_birth) ? $data->date_of_birth : '') }}" name="date_of_birth" placeholder="{{__('sanghast_aaryika.enter_date_of_birth')}}"  >
											@if ($errors->has('date_of_birth'))
												<span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.birth_place')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="birth_place" value="{{ old('birth_place') . (isset($data->birth_place) ? $data->birth_place : '') }}" name="birth_place" placeholder="{{__('sanghast_aaryika.enter_birth_place')}}">
											@if ($errors->has('birth_place'))
												<span class="text-danger">{{ $errors->first('birth_place') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.secular_education')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="secular_education" value="{{ old('secular_education') . (isset($data->secular_education) ? $data->secular_education : '') }}" name="secular_education" placeholder="{{__('sanghast_aaryika.enter_secular_education')}}">
											@if ($errors->has('secular_education'))
												<span class="text-danger">{{ $errors->first('secular_education') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.marriage_date')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="marriage" value="{{ old('marriage') . (isset($data->marriage) ? $data->marriage : '') }}" name="marriage" placeholder="{{__('sanghast_aaryika.enter_marriage_date')}}">
											@if ($errors->has('marriage'))
												<span class="text-danger">{{ $errors->first('marriage') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.vrat_guru')}} <span class="text-danger">*</span> </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="vrat_guru" value="{{ old('vrat_guru') . (isset($data->vrat_guru) ? $data->vrat_guru : '') }}" name="vrat_guru" placeholder="{{__('sanghast_aaryika.enter_vrat_guru')}}">
											@if ($errors->has('vrat_guru'))
												<span class="text-danger">{{ $errors->first('vrat_guru') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.brahmacharya_vrat')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="brahmacharya_vrat" value="{{ old('brahmacharya_vrat') . (isset($data->brahmacharya_vrat) ? $data->brahmacharya_vrat : '') }}" name="brahmacharya_vrat" placeholder="{{__('sanghast_aaryika.enter_brahmacharya_vrat')}}">
											@if ($errors->has('brahmacharya_vrat'))
												<span class="text-danger">{{ $errors->first('brahmacharya_vrat') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.image')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="image" value="{{ old('image') . (isset($data->image) ? $data->image : '') }}" name="image" >
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
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.homelessness')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="homelessness" value="{{ old('homelessness') . (isset($data->homelessness) ? $data->homelessness : '') }}" name="homelessness" placeholder="{{__('sanghast_aaryika.enter_homelessness')}}">
											@if ($errors->has('homelessness'))
												<span class="text-danger">{{ $errors->first('homelessness') }}</span>
											@endif
										</div>
									</div>									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.holding_the_statue')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="holding_the_statue" value="{{ old('holding_the_statue') . (isset($data->holding_the_statue) ? $data->holding_the_statue : '') }}" name="holding_the_statue" placeholder="{{__('sanghast_aaryika.enter_holding_the_statue')}}">
											@if ($errors->has('holding_the_statue'))
												<span class="text-danger">{{ $errors->first('holding_the_statue') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.aaryika_diksha')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="aryika_diksha" value="{{ old('aryika_diksha') . (isset($data->aryika_diksha) ? $data->aryika_diksha : '') }}" name="aryika_diksha" placeholder="{{__('sanghast_aaryika.enter_aaryika_diksha')}}">
											@if ($errors->has('aryika_diksha'))
												<span class="text-danger">{{ $errors->first('aryika_diksha') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.diksha_detail')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="diksha_detail" value="{{ old('diksha_detail') . (isset($data->diksha_detail) ? $data->diksha_detail : '') }}" name="diksha_detail" placeholder="{{__('sanghast_aaryika.enter_diksha_detail')}}">
											@if ($errors->has('diksha_detail'))
												<span class="text-danger">{{ $errors->first('diksha_detail') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.initiation_guru')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="initiation_guru" value="{{ old('initiation_guru') . (isset($data->initiation_guru) ? $data->initiation_guru : '') }}" name="initiation_guru" placeholder="{{__('sanghast_aaryika.enter_initiation_guru')}}">
											@if ($errors->has('initiation_guru'))
												<span class="text-danger">{{ $errors->first('initiation_guru') }}</span>   
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.interests')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="interests" value="{{ old('interests') . (isset($data->interests) ? $data->interests : '') }}" name="interests" placeholder="{{__('sanghast_aaryika.enter_interests')}}">
											@if ($errors->has('interests'))
												<span class="text-danger">{{ $errors->first('interests') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.specialty')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="specialty" value="{{ old('specialty') . (isset($data->specialty) ? $data->specialty : '') }}" name="specialty" placeholder="{{__('sanghast_aaryika.enter_specialty')}}">
											@if ($errors->has('specialty'))
												<span class="text-danger">{{ $errors->first('specialty') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.initiated_disciples')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="initiated_disciples" value="{{ old('initiated_disciples') . (isset($data->initiated_disciples) ? $data->initiated_disciples : '') }}" name="initiated_disciples" placeholder="{{__('sanghast_aaryika.enter_initiated_disciples')}}">
											@if ($errors->has('initiated_disciples'))
												<span class="text-danger">{{ $errors->first('initiated_disciples') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mausoleum')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mausoleum" value="{{ old('mausoleum') . (isset($data->mausoleum) ? $data->mausoleum : '') }}" name="mausoleum" placeholder="{{__('sanghast_aaryika.enter_mausoleum')}}">
											@if ($errors->has('mausoleum'))
												<span class="text-danger">{{ $errors->first('mausoleum') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.url_slug')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="url_slug" value="{{ old('url_slug') . (isset($data->url_slug) ? $data->url_slug : '') }}" name="url_slug" placeholder="{{__('sanghast_aaryika.enter_url_slug')}}">
											@if ($errors->has('url_slug'))
												<span class="text-danger">{{ $errors->first('url_slug') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.current_conflict')}} </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="current_conflict" value="{{ old('current_conflict') . (isset($data->current_conflict) ? $data->current_conflict : '') }}" name="current_conflict" placeholder="{{__('sanghast_aaryika.enter_current_conflict')}}">
											@if ($errors->has('current_conflict'))
												<span class="text-danger">{{ $errors->first('current_conflict') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.mother_tongue')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="mother_tongue" value="{{ old('mother_tongue') . (isset($data->mother_tongue) ? $data->mother_tongue : '') }}" name="mother_tongue" placeholder="{{__('sanghast_aaryika.enter_mother_tongue')}}">
											@if ($errors->has('mother_tongue'))
												<span class="text-danger">{{ $errors->first('mother_tongue') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.serial_number')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="serial_number" value="{{ old('serial_number') . (isset($data->serial_number) ? $data->serial_number : '') }}" name="serial_number" placeholder="{{__('sanghast_aaryika.enter_serial_number')}}">
											@if ($errors->has('serial_number'))
												<span class="text-danger">{{ $errors->first('serial_number') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('sanghast_aaryika.description')}} </label>
										<div class="col-sm-9">
											<textarea class="form-control" name="text" rows="2"  placeholder="{{__('sanghast_aaryika.enter_description')}}" id="text">{{ old('description') . (isset($data->description) ? $data->description : '') }}</textarea>
										</div>
									</div>
									
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