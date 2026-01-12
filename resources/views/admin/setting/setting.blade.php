@extends('admin.app')
@section('content')
	<div class="main-content">
		<div class="container-fluid">
			<div class="col-xxl-18">
				<div class="card mt-xxl-n">
					<div class="card-header">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link p-v-15 " role="tab" data-toggle="tab" href="#personalDetails" role="tab">
									 {{__('setting.personal_details')}}
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-v-15" role="tab" data-toggle="tab" href="#changePassword" role="tab">
									 {{__('setting.change_password')}}
								</a>
							</li>
						</ul>
					</div>
					<div class="card-body p-4">
						<div class="tab-content">
							<div class="tab-pane active" id="personalDetails" role="tabpanel">
								<form action="{{route('admin.updateprofile')}}" method="post" id="updateprofileform" enctype="multipart/form-data"> 
								@csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="firstnameInput" class="form-label">{{__('setting.name')}}<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="name" id="first_name" placeholder="{{__('setting.enter_your_name')}}" value="{{!empty(Auth::user())?Auth::user()->name:''}}" required>
											</div>
										</div>
										
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="emailInput" class="form-label">{{__('setting.email_address')}}</label>
												<input type="email" class="form-control" id="email" placeholder="{{__('setting.enter_your_email')}}" value="{{!empty(Auth::user())?Auth::user()->email:''}}" readonly>
											</div>
										</div>                                                  
										<div class="col-lg-12">
											<div class="text-sm-right">
												<button type="submit" class="btn btn-primary">{{__('setting.save_changes')}}</button>
												<a class="btn btn-danger" href="{{ route('admin.dashboard') }}"> {{__('setting.cancel')}}</a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="changePassword" role="tabpanel">
								<form action="{{route('admin.changepassword')}}" method="post" id="changepasswordform">
								@csrf
									<div class="row g-2">
										<div class="col-lg-4">
											<div>
												<label for="oldpasswordInput" class="form-label">{{__('setting.old_password')}}<span class="text-danger">*</span></label>
												<input type="password" class="form-control" name="oldpassword" id="oldpasswordInput" placeholder="{{__('setting.enter_current_password')}}" required>
												@if ($errors->has('oldpassword'))
													<span class="text-danger">{{ $errors->first('oldpassword') }}</span>
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<label for="newpasswordInput" class="form-label">{{__('setting.new_password')}}<span class="text-danger">*</span></label>
												<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="{{__('setting.enter_new_password')}}" required>
												@if ($errors->has('newpassword'))
													<span class="text-danger">{{ $errors->first('newpassword') }}</span>
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<div>
												<label for="confirmpasswordInput" class="form-label">{{__('setting.confirm_password')}}<span class="text-danger">*</span></label>
												<input type="password" class="form-control" name="confirmpassword" id="confirmpasswordInput" placeholder="{{__('setting.enter_confirmpassword')}}" required>
												@if ($errors->has('confirmpassword'))
													<span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-2 mb-2 ">
												<span class="text-danger">{{__('setting.password_minimum_length_must_be_8_character')}}</span>											
											</div>
										</div>
										<div class="col-lg-12">
											<div class="text-sm-right">
												<button type="submit" class="btn btn-primary">{{__('setting.change_password')}}</button>
												<a class="btn btn-danger" href="{{ route('admin.dashboard') }}"> {{__('setting.cancel')}}</a>
											</div>
										</div>
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
<script src="{{asset('backend\assets\js\setting.js')}}"></script>
<script src="{{asset('backend\assets\bootstrap\js\bootstrap.bundle.min.js')}}"></script>

<script>
	var ok = "{{trans('buttion.ok')}}" ; 
	var alert = "{{trans('messages.alert')}}" ; 
</script>
<script src="{{asset('backend\assets\js\jquery\validation\jquery.validate.min.js')}}"></script>
<script src="{{asset('backend\assets\js\jquery\validation\additional-methods.min.js')}}"></script>
<script src="{{asset('backend\assets\js\sweetalert\sweetalert.min.js')}}"></script>
<script>
	var old_password_check = "{{route('admin.action')}}"
</script>
<script src="{{asset('backend\admin\custom\setting\changepassword.js')}}"></script>
<script src="{{asset('backend\admin\custom\setting\updateprofile.js')}}"></script>


@endsection