<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\InterestStoreRequest;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\UserInterface;
use Session;
use Redirect;

class SettingController extends Controller
{
	private $user;
	public function __construct(UserInterface $user) 
	{
		$this->user = $user;
	}
	
    public function index(){
		
		return view('admin.setting.setting');
	}
	
	public function changepassword(ChangePasswordRequest $request){
		$this->user->changepassword($request->newpassword);
        return response()->json(["error"=>false,"message"=>__('messages.the_password_has_been_updated_successfully')]);
	}
	
	public function updateprofile(Request $request){
		$data = $request->all();
		$user = $this->user->update($data,Auth::user()->id);
		return response()->json(["error"=>false,"message"=>__('messages.profile_has_been_updated_successfully')]);
	}
	
	
	public function action(Request $request){
		$tag = $request->input('tag');
		if($tag == 'old_password_check'){
			if(!Hash::check ($request->input('oldpassword'), Auth::user()->password)){
				 echo 'false';
			}else{
				echo 'true';
			}
		}
	}

}
