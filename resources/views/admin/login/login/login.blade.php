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
                                    <div class="m-b-20 text-center">
                                        <img class="img-responsive inline-block" src="{{asset('backend/assets/images/logo/logo_main.jpg')}}" alt="" height="70">
                                    </div>
                                    <p class="m-t-15 font-size-13">Please enter your email and password to login</p>
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
                                    <form method="post" action="{{route('admin.dologin')}}" >
										@csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
											@if ($errors->has('email'))
												<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
											@if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
                                        </div>
                                        <div class="checkbox font-size-13 d-inline-block p-v-0 m-v-0">
                                            <input id="agreement" name="agreement" type="checkbox">
                                            <label for="agreement">Keep Me Signed In</label>
                                        </div>
                                        <div class="pull-right">
                                       <a href="{{route('admin.forgotpasswordindex')}}">Forgot Password?</a>  
                                        </div>
                                        <div class="m-t-20 text-right">
                                            <button class="btn btn-gradient-primary" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection

