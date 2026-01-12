<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SuvicharImageStoreRequest;
use App\Http\Requests\SuvicharImageUpdateRequest;
use App\Models\SuvicharImage;
use App\Interfaces\SuvicharImageInterface;

class SuvicharImageController extends Controller
{
	private $image;
	public function __construct(SuvicharImageInterface $image) 
	{
		$this->image = $image;
	}
	
    public function index()
	{
		$data = $this->image->get();
		return view('admin.suvichar_image.index',compact('data'));
	}
	
	public function create()
    { 
		return view('admin.suvichar_image.create');
    }

    public function store(SuvicharImageStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->image->store($data) ; 
		return redirect()->route('suvichar_image.list')->with('success','suvichar_image_has_been_added_successfully!'); 
    }
	 public function edit($id)
    {	
		$data = $this->image->find($id) ;
		return view('admin.suvichar_image.edit',compact('data'));
    }

    public function update(SuvicharImageUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->image->update($data,$id) ; 
    	return redirect()->route('suvichar_image.list')->with('success', __('messages.the_suvichar_image_data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('ImageId');
		$this->image->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.the_suvichar_image_data_has_been_deleted_successfully')]);
	}
	public function getall()
    {
		$data = $this->image->get_suvichar();
		return view('user.suvichar_image.index',compact('data'));
	}
	public function getall_sanskar_manjusha()
    {
		$data = $this->image->get_sanskar_manjusha();
		return view('user.sanskar_manjusha.index',compact('data'));
	}
}
