<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\VigyanMatiMatajiUpdateRequest;
use App\Interfaces\VigyanMatiMatajiInterface;

class VigyanMatiMatajiController extends Controller
{
	private $vigyan;
	public function __construct(VigyanMatiMatajiInterface $vigyan) 
	{
		$this->vigyan = $vigyan;
	}
	
	public function create()
    { 	
		$data = $this->vigyan->get();
		return view('admin.vigyan_mati_mataji.index',compact('data'));
    }

    public function store(VigyanMatiMatajiUpdateRequest $request)
    {
		
		$data = $request->all();
		$id = $request->input('id');
		if(!empty($id)){
			$result = $this->vigyan->update($data,$id) ;
			return redirect()->route('vigyan_mati_mataji.create')->with('success', __('messages.data_has_been_updated_successfully')); 	
		}else{
			$result = $this->vigyan->store($data) ; 
			return redirect()->route('vigyan_mati_mataji.create')->with('success', __('messages.data_has_been_added_successfully')); 	
		}																
    }
	
	public function getall()
    {	
		$data = $this->vigyan->get();
        return view('user.aaryika_maa.vigyanmatimataji.index',compact('data'));
    } 
}
