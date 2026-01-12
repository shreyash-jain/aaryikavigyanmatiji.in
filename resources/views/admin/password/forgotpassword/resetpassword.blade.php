@extends('admin.login.app')
@section('content')
<div class="auth-page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center mt-sm-5 mb-4 text-white-50">
					<div>
						<a href="index.html" class="d-inline-block auth-logo">
							<!--<img src="assets/images/logo-light.png" alt="" height="20">-->
						</a>
					</div>
					<!--<p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>-->
				</div>
			</div>
		</div>
		<!-- end row -->
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6 col-xl-5">
				<div class="card mt-4">
					<div class="card-body p-4">
						<div class="text-center mt-2">
							<h5 class="text-primary">{{__('login.forgot_password')}}</h5>
							<p class="text-muted">{{__('login.reset_password_with_AARYIKAVIGYANMATAJI')}} </p>
							
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
			
						<div class="p-2">
							<form  method="post" action="{{route('admin.doresetpassword')}}" >
							@csrf
							
								<input type="hidden" name="token" value="{{$token}}">
								<input type="hidden" name="id" value="{{$id}}">
								<div class="mb-4">
									<label class="form-label">{{__('login.new_password')}}<span class="text-danger">*</span></label>
									<input type="password" class="form-control pe-5 password-input" placeholder="{{__('login.enter_new_password')}}" id="new_password" name="new_password">
									@if ($errors->has('new_password'))
										<span class="text-danger">{{ $errors->first('new_password') }}</span>
									@endif
								</div>
								
								<div class="mb-4">
									<div class="float-end"> 
										<a href="{{route('admin.resendotp',['id' => $id, 'token' => $token])}}" class="text-muted">{{__('login.resend_reset_link')}}</a>
									</div>
									
									<label class="form-label">{{__('login.conform_password')}}<span class="text-danger">*</span></label>
									<input type="password" class="form-control pe-5 password-input" placeholder="{{__('login.enter_conform_password')}}" id="confirm_password" name="confirm_password">
									@if ($errors->has('confirm_password'))
										<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
									@endif
								</div>

								<div class="text-center mt-4">
									<button class="btn btn-success w-100" type="submit">{{__('login.reset_password')}}</button>
								</div>
							</form>
						</div>
					</div>
				</div>			
				
			</div>
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
@endsection