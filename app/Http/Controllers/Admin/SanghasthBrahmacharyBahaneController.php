<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SanghasthBrahmacharyBahaneStoreRequest;
use App\Http\Requests\SanghasthBrahmacharyBahaneUpdateRequest;
use App\Interfaces\SanghasthBrahmacharyBahaneInterface;

class SanghasthBrahmacharyBahaneController extends Controller
{
    private $bahane;
	public function __construct(SanghasthBrahmacharyBahaneInterface $bahane) 
	{
		$this->bahane = $bahane;
	}
	
    public function index()
	{
		$data = $this->bahane->get();
		return view('admin.brahmachary_bahane.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.brahmachary_bahane.create');
    }

    public function store(SanghasthBrahmacharyBahaneStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->bahane->store($data) ; 
		return redirect()->route('sanghasth_brahmachary_bahane.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->bahane->find($id) ;
		return view('admin.brahmachary_bahane.edit',compact('data'));
    }

    public function update(SanghasthBrahmacharyBahaneUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->bahane->update($data,$id) ; 
    	return redirect()->route('sanghasth_brahmachary_bahane.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('BahanId');
		$this->bahane->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function detail($url_slug)
    {
		$data = $this->bahane->find_data($url_slug) ;
		return view('user.aaryika_maa.brahmachary_bahane.index',compact('data'));
	}
}
