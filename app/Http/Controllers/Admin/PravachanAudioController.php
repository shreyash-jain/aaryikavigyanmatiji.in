<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PravachanAudioStoreRequest;
use App\Http\Requests\PravachanAudioUpdateRequest;
use App\Interfaces\PravachanAudioInterface;

class PravachanAudioController extends Controller
{
    private $pravachan_audio;
	public function __construct(PravachanAudioInterface $pravachan_audio) 
	{
		$this->pravachan_audio = $pravachan_audio;
	}
	
    public function index()
	{
		$data = $this->pravachan_audio->get();
		return view('admin.pravachan_audio.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.pravachan_audio.create');
    }

    public function store(PravachanAudioStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->pravachan_audio->store($data) ; 
		return redirect()->route('pravachan_audio.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->pravachan_audio->find($id) ;
		return view('admin.pravachan_audio.edit',compact('data'));
    }

    public function update(PravachanAudioUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->pravachan_audio->update($data,$id) ; 
    	return redirect()->route('pravachan_audio.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('AudioId');
		$this->pravachan_audio->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function getall()
    {
		$data = $this->pravachan_audio->get();
		return view('user.pravachan_audio.index',compact('data'));
	}
}