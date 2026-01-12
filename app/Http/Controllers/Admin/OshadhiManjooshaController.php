<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OshadhiStoreRequest;
use App\Http\Requests\OshadhiUpdateRequest;
use App\Interfaces\OshadhiManjooshaInterface;   

class OshadhiManjooshaController extends Controller
{
   private $oshadhi;
	public function __construct(OshadhiManjooshaInterface $oshadhi) 
	{
		$this->oshadhi = $oshadhi;   
	}
	
    public function index()
	{
		$data = $this->oshadhi->get();
		return view('admin.oshadhimanjoosha.index',compact('data'));
	}

	public function create()
    { 
		return view('admin.oshadhimanjoosha.create');
    }

    public function store(OshadhiStoreRequest $request)
    {
		$data = $request->all();	
		//echo "<pre>" ; print_r($data) ; die ;
		$data = $this->oshadhi->store($data) ; 
		return redirect()->route('oshadhi_manjoosha.list')->with('success', __('messages.data_has_been_added_successfully'));	
    }
	 public function edit($id)
    {	
		$data = $this->oshadhi->find($id) ;
		return view('admin.oshadhimanjoosha.edit',compact('data'));
    }

    public function update(OshadhiUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->oshadhi->update($data,$id) ; 
    	return redirect()->route('oshadhi_manjoosha.list')->with('success', __('messages.data_has_been_updated_successfully')); 
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('OshadhiId');
		$this->oshadhi->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	}
	
    public function getall()
    {
		$data = $this->oshadhi->getByOrder();
		return view('user.oshadhimanjoosha.index',compact('data'));
	}
}
