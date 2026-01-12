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
						<h2 class="card-title">{{__('vihar_info.vihar_info')}}  {{__('vihar_info.vihar_info_edit')}}</h2>						
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="p-h-10">
								<form  id="sanghast_aaryika_form" action="{{ route('vihar_info.update',$data->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.title')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="title" value="{{(isset($data->title) ? $data->title : '') }}" name="title" placeholder="{{__('vihar_info.enter_title')}}">
											@if ($errors->has('title'))
												<span class="text-danger">{{ $errors->first('title') }}</span>
											@endif
										</div>
									</div>	
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.address')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="address" value="{{(isset($data->address) ? $data->address : '') }}" name="address" placeholder="{{__('vihar_info.enter_address')}}">
											@if ($errors->has('address'))
												<span class="text-danger">{{ $errors->first('address') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">  
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.text')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" name="text" rows="2"  placeholder="{{__('vihar_info.enter_text')}}" id="text">{{(isset($data->text) ? $data->text : '') }}</textarea>
											@if ($errors->has('text'))
												<span class="text-danger">{{ $errors->first('text') }}</span> 
											@endif
										</div>
									</div>									
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-h-10">
									<div class="form-group row">
										<label for="recipient-name" class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.status')}}<span class="text-danger">*</span></label><br>
										<div class="col-sm-9">
											<select class="form-control" id="selectize-dropdown" name="status" >
												<option  disabled selected >-- {{__('vihar_info.choose_status')}} --</option>
												<option value="1" {{isset($data->status) && !empty($data->status) && $data->status == 1 ?'selected':''}}>{{__('vihar_info.active')}}</option>
												<option value="0" {{isset($data->status) && !empty($data->status) && $data->status == 0 ?'selected':''}}>{{__('vihar_info.unactive')}}</option>
											</select>
											@if ($errors->has('status'))
												<span class="text-danger">{{ $errors->first('status') }}</span>
											@endif
										</div>	
									</div>							
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.start_date')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<div class="icon-input">
												<i class="mdi mdi-timer"></i>
												<input id="datepicker-1"  data-provide="datepicker" name="start_date" type="text" value="{{(isset($data->start_date) ?  \Carbon\Carbon::parse($data->start_date)->format('d-m-Y')  : '') }}" class="form-control dateformate" placeholder="{{__('vihar_info.enter_start_date')}}">
											</div>
											@if ($errors->has('start_date'))
												<span class="text-danger">{{ $errors->first('start_date') }}</span>
											@endif
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label control-label text-sm-right">{{__('vihar_info.end_date')}} <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<div class="icon-input">
												<i class="mdi mdi-timer"></i>
												<input id="datepicker-1"  data-provide="datepicker" name="end_date" type="text" value="{{(isset($data->end_date) ?  \Carbon\Carbon::parse($data->end_date)->format('d-m-Y')  : '') }}" class="form-control dateformate" placeholder="{{__('vihar_info.enter_start_date')}}">
											</div>
											@if ($errors->has('end_date'))
												<span class="text-danger">{{ $errors->first('end_date') }}</span>
											@endif
										</div>
									</div>
									<div class="text-sm-right">
										<a href="{{route('vihar_info.list')}}"  class="btn btn-gradient-danger">{{__('button.cancel')}}</a>
										<button type="submit" class="btn btn-gradient-primary ">{{__('button.submit')}}</button>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('.dateformate').datepicker({
             format: 'dd-mm-yyyy', 
			// startDate: new Date()
        });
    });
</script>
<script src="{{asset('backend\assets\vendor\bootstrap-datepicker\dist\js\bootstrap-datepicker.js')}}"></script>
@endsection