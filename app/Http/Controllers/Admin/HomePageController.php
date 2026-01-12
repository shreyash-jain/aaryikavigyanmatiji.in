<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\HomePageStoreRequest;
use App\Models\SuvicharImage;
use App\Interfaces\HomePageInterface;

class HomePageController extends Controller
{
	private $home_page;
	public function __construct(HomePageInterface $home_page) 
	{
		$this->home_page = $home_page;
	}

	public function create()
    { 
		$image_data= SuvicharImage::get()->all();
		$data = $this->home_page->get();
		return view('admin.home_page.home_setting',compact('data','image_data'));
    }

    public function store(HomePageStoreRequest $request)
    {
		$data = $request->all();
		$id = $request->input('id');
		if(!empty($id)){
			$result = $this->home_page->update($data,$id) ;
			return redirect()->route('home_page.home')->with('success', __('messages.data_has_been_updated_successfully')); 	
		}else{
			$result = $this->home_page->store($data) ; 
			return redirect()->route('home_page.home')->with('success', __('messages.data_has_been_added_successfully')); 	
		}
		
    }
	

}
