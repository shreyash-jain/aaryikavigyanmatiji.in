<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChaturmasJanakareeStoreRequest;
use App\Http\Requests\ChaturmasJanakareeUpdateRequest;
use App\Models\ChaturmasJanakaree;
use App\Interfaces\ChaturmasJanakareeInterface;

class ChaturmasJanakareeController extends Controller
{

	private $chaturmas;
	public function __construct(ChaturmasJanakareeInterface $chaturmas) 
	{
		$this->chaturmas = $chaturmas;
	}
	
    public function index()
	{
		$data = $this->chaturmas->get();
		return view('admin.chaturmas_janakaree.index',compact('data'));
	}

	public function create()
    { 
		
    }

    public function store(ChaturmasJanakareeStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->chaturmas->store($data) ; 
		return response()->json(['error' =>false,'message' =>__('messages.the_chaturmas_janakaree_has_been_added_successfully')]);
															 
    }
	public function edit($id)
    {	
		$data = $this->chaturmas->find($id) ;		
		return response()->json(['error' => false, 'data' => $data]);
    }

    public function update_save(ChaturmasJanakareeUpdateRequest $request)
    {		
        $data = $request->all();
		$id= $request->input('chaturmas_id');		
	    $data = $this->chaturmas->update($data,$id) ; 
		return response()->json(['error' =>false,'message' => __('messages.data_has_been_updated_successfully')]);		
    } 
	
    public function destroy(Request $request)
    {
		$id = $request->input('ChaturmasId');
		$this->chaturmas->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	}
	
    public function getall()
    {
		$data = $this->chaturmas->get();
		return view('user.chaturmas_janakaree.index',compact('data'));
	}
}


