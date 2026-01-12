<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RanoliRatnakarStoreRequest;
use App\Http\Requests\RanoliRatnakarUpdateRequest;
use App\Interfaces\RanoliRatnakarInterface;

class RanoliRatnakar extends Controller
{
    private $ranoli_ratnakar;
	public function __construct(RanoliRatnakarInterface $ranoli_ratnakar) 
	{
		$this->ranoli_ratnakar = $ranoli_ratnakar;
	}
	
    public function index()
	{
		$data = $this->ranoli_ratnakar->get();
		return view('admin.ranoli_ratnakar.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.ranoli_ratnakar.create');
    }

    public function store(RanoliRatnakarStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->ranoli_ratnakar->store($data) ; 
		return redirect()->route('ranoli-ratnakar.index')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	public function edit($id)
    {	
		$data = $this->ranoli_ratnakar->find($id) ;
		return view('admin.ranoli_ratnakar.edit',compact('data'));
    }

    public function update(RanoliRatnakarUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->ranoli_ratnakar->update($data,$id) ; 
    	return redirect()->route('ranoli-ratnakar.index')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('PostId');
		$this->ranoli_ratnakar->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	

}
