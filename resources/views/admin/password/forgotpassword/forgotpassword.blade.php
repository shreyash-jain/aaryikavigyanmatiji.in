@extends('admin.login.app')
@section('content')
	<div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-15">
                                    <div class="m-b-30">
                                        <img class="img-responsive inline-block" src="assets/images/logo/logo.png" alt="">
                                        <h2 class="inline-block pull-right m-v-0 p-t-15">Forgot password</h2>
										@if(session()->has('success'))
											<div class="alert alert-success ">
												{{ session()->get('success') }}
											</div>	
										@endif
										@if(session()->has('error'))
											<div class="alert alert-danger text-center">
												{{ session()->get('error') }}
											</div>
										@endif
                                    </div>
                                    <p class="m-t-15 font-size-13">Please enter your email and instructions will be sent to you</p>
                                    <form method="post" action="{{route('admin.forgotpassword')}}" >
										@csrf
                                        <div class="mb-4">
											<label class="form-label">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
											@if ($errors->has('email'))
													<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div>

										<div class="text-center mt-4">
											<button class="btn btn-success w-100" type="submit">Send reset link</button>
										</div>
									</form>
                                </div>
								<div class="mt-4 text-center">
									<p class="mb-0">Wait I remember my password <a href="{{route('admin.login')}}" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
								</div>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection