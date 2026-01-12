<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ViharInfoStoreRequest;
use App\Http\Requests\ViharInfoUpdateRequest;
use App\Interfaces\ViharInfoInterface;

class ViharInfoController extends Controller
{

    private $vihar_info;
	public function __construct(ViharInfoInterface $vihar_info) 
	{
		$this->vihar_info = $vihar_info;
	}
	
    public function index()
	{
		$data = $this->vihar_info->get();
		return view('admin.vihar_info.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.vihar_info.create');
    }

    public function store(ViharInfoStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->vihar_info->store($data) ; 
		return redirect()->route('vihar_info.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->vihar_info->find($id) ;
		return view('admin.vihar_info.edit',compact('data'));
    }

    public function update(ViharInfoUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->vihar_info->update($data,$id) ; 
    	return redirect()->route('vihar_info.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('ViharId');
		$this->vihar_info->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function getall()
    {
		$data = $this->vihar_info->get();
		return view('user.vihar_info.index',compact('data'));
	}
}


