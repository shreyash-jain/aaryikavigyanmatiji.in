<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Auth;
use Hash;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Helpers\Createotp;
use App\Models\PasswordResetToken;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Models\SendEmail;

class LoginController extends Controller
{
    public function index()
	{

		return view('admin.login.login.login');
	}
	
	public function dologin(LoginRequest $request){
		if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password ],$request->remember)):
		    session()->put('locale', config('app.locale'));
			return Redirect::route('admin.dashboard');
		endif;
		return Redirect::back()->withErrors(["email" => __('messages.this_email_address_does_not_exist')])->withInput();
	}
	
	public function logout(Request $request) 
	{
		Auth::logout();
		return redirect()->route('admin.login');
	}
	
	public function forgotpasswordindex(){
		return view('admin.password.forgotpassword.forgotpassword');
	}
	
	public function forgotpassword(ForgotPasswordRequest $request)
	{	
		$user = User::where(['email'=>$request->email])->first();
		
		$token = Createotp::generatenumber();	
		
		$tokenexists = PasswordResetToken::where(['email'=>$request->email])->first();
		
		if($tokenexists !==null){
			PasswordResetToken::where(['email' => $request->email])->update(['token' => Crypt::encryptString($token)]);
		}else{
			$resettoken = new PasswordResetToken;
			$resettoken->email=$request->email;
			$resettoken->token=Crypt::encryptString($token);
			$resettoken->save();
		}
		
		$token_d = Crypt::encryptString($token);
	    $linked = route('admin.resetpasswordindex',[$user->id,$token_d]);		
		$sendmail = new SendEmail;
		
		$data=array( 
			'template'=>'admin.password.mail.resetpassword_admin',
			'name'=>$user->name,
			'code'=>$token,
			'linked'=>$linked,
			'to'=>$user->email,
			'subject'=>'Forget Password',
		); 
		$sendmail->send($data); 
		return redirect()->route('admin.forgotpasswordindex')->with('success', __('messages.email_has_been_send_with')); 
	}
		public function verifyotp($id,$token,Request $request)
	{						
	    $user = User::find($request->id);
		$userData = PasswordResetToken::where(['email'=>$user->email])->first();
		if(empty($request->token) ||  (empty($userData->token)) || Crypt::decryptString($request->token) != Crypt::decryptString($userData->token)){
			return redirect()->route('admin.forgotpasswordindex')->with('error',__('messages.invalid_link')); 
		}
		$date = $userData->created_at;
		$givenDate = Carbon::parse($date);
		$currentDate = Carbon::now();
		$minutesDifference = $currentDate->diffInMinutes($givenDate);
		if ($minutesDifference > 5) {
			PasswordResetToken::where(['email'=>$user->email])->delete();
			return redirect()->route('admin.forgotpasswordindex')->with('error',__('messages.the_given_link_is_expired')); 
		}
		return view('admin.password.forgotpassword.resetpassword', compact('id', 'token'));	
	}
	
	public function doresetpassword(ResetPasswordRequest $request)
	{
		$user = User::find($request->id);
		$userData = PasswordResetToken::where(['email'=>$user->email])->first();
		if(empty($request->token) ||  (empty($userData->token)) || Crypt::decryptString($request->token) != Crypt::decryptString($userData->token)){
			return redirect()->route('admin.resetpasswordindex',[$request->id,$request->token])->with('error',__('messages.invalid_link')); 
		}
		$date = $userData->created_at;
		$givenDate = Carbon::parse($date);
		$currentDate = Carbon::now();
		$minutesDifference = $currentDate->diffInMinutes($givenDate);
		if ($minutesDifference > 5) {
			PasswordResetToken::where(['email'=>$user->email])->delete();
				return redirect()->route('admin.resetpasswordindex',[$request->id,$request->token])->with('error',__('messages.the_given_link_is_expired')); 
		}

		user::whereid($request->id)->update([
				'password' => Hash::make($request->new_password)
		]);		
		PasswordResetToken::where(['email'=>$user->email])->delete();
		return redirect()->route('admin.login')->with('success',__('messages.the_password_has_been_change_successfully')); 
	}
	
	public function resendotp(Request $request)
	{
		$user = User::find($request->id);
		$token = Createotp::generatenumber();
		$tokenexists = PasswordResetToken::where(['email'=>$user->email])->first();
		if($tokenexists !==null){
			PasswordResetToken::where(['email' => $user->email])->update(['token' => Crypt::encryptString($token)]);
		}else{
			$resettoken = new PasswordResetToken;
			$resettoken->email=$user->email;
			$resettoken->token=Crypt::encryptString($token);
			$resettoken->save();
		}
		
		$user = user::where(['email'=>$user->email])->first();
		$sendmail = new SendEmail;
		$token_d = Crypt::encryptString($token);
		$linked = route('admin.resetpasswordindex',[$user->id,$token_d]);
		$data=array( 
			'template'=>'admin.password.mail.resetpassword_admin',
			'name'=>$user->name,
			'code'=>$token,
			'linked'=>$linked,
			'to'=>$user->email,
			'subject'=>'Forget Password',
		); 
		$sendmail->send($data); 
		return redirect()->route('admin.resetpasswordindex',[$request->id,$token_d])->with('success',__('messages.link_has_been_resend_successfully')); 
	}
}
