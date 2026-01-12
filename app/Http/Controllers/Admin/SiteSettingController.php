<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SiteStoreRequest;
use App\Interfaces\SiteInterface;

class SiteSettingController extends Controller
{
	private $site;
	public function __construct(SiteInterface $site) 
	{
		$this->site = $site;
	}
	
    public function index(Request $request)
	{

	}

	public function create()
    { 
		$data = $this->site->find();
		return view('admin.general_setting.site_setting',compact('data'));
    }

    public function store(SiteStoreRequest $request)
    {
		$data = $request->all();
		$id = $request->input('id');
		if(!empty($id)){
			$site = $this->site->update($data,$id) ;
			return redirect()->route('general_setting.site')->with('success', __('messages.the_site_data_has_been_updated_successfully')); 
		}else{
			$data = $this->site->store($data) ; 
			return redirect()->route('general_setting.site')->with('success', __('messages.the_site_data_has_been_added_successfully')); 
		}
			
    }
	

}