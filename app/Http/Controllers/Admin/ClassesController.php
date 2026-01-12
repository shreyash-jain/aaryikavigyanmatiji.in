<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClassesStoreRequest;
use App\Http\Requests\ClassesUpdateRequest;
use App\Interfaces\ClassesInterface;

class ClassesController extends Controller
{

    private $classes;
	public function __construct(ClassesInterface $classes) 
	{
		$this->classes = $classes;
	}
	
    public function index()
	{
		$data = $this->classes->get();
		return view('admin.classes.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.classes.create');
    }

    public function store(ClassesStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->classes->store($data) ; 
		return redirect()->route('classes.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->classes->find($id) ;
		return view('admin.classes.edit',compact('data'));
    }

    public function update(ClassesUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->classes->update($data,$id) ; 
    	return redirect()->route('classes.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('ClassId');
		$this->classes->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function getClasses()
    {
		$data = $this->classes->getActive();
		return view('user.classes.index',compact('data'));
	}
}


