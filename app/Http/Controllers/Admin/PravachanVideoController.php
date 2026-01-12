<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PravachanVideoStoreRequest;
use App\Http\Requests\PravachanVideoUpdateRequest;
use App\Interfaces\PravachanVideoInterface;

class PravachanVideoController extends Controller
{

    private $pravachan_video;
	public function __construct(PravachanVideoInterface $pravachan_video) 
	{
		$this->pravachan_video = $pravachan_video;
	}
	
    public function index()
	{
		$data = $this->pravachan_video->get();
		return view('admin.pravachan_video.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.pravachan_video.create');
    }

    public function store(PravachanVideoStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->pravachan_video->store($data) ; 
		return redirect()->route('pravachan_video.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->pravachan_video->find($id) ;
		return view('admin.pravachan_video.edit',compact('data'));
    }

    public function update(PravachanVideoUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->pravachan_video->update($data,$id) ; 
    	return redirect()->route('pravachan_video.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('VideoId');
		$this->pravachan_video->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function getPravachan()
    {
		$data = $this->pravachan_video->get_pravachan();
		$title = __('messages.pravachan');		
		return view('user.pravachan_video.index',compact('data','title'));
	}
	
	public function getVidhaan()
    {
		$data = $this->pravachan_video->get_vidhaan();
		$title = __('messages.vidhaan');
		return view('user.pravachan_video.index',compact('data','title'));
	}
	public function getOther()
    {
		$data = $this->pravachan_video->get_Other();
		$title = __('messages.others');
		return view('user.pravachan_video.index',compact('data','title'));
	}
}


