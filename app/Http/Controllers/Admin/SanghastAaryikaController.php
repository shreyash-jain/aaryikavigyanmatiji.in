<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SanghastAaryikaStoreRequest;
use App\Http\Requests\SanghastAaryikaUpdateRequest;
use App\Interfaces\SanghastAaryikaInterface;

class SanghastAaryikaController extends Controller
{
	private $aaryika;
	public function __construct(SanghastAaryikaInterface $aaryika) 
	{
		$this->aaryika = $aaryika;
	}
	
    public function index()
	{
		$data = $this->aaryika->get();
		return view('admin.sanghast_aaryika.list',compact('data'));
	}

	public function create()
    { 
		return view('admin.sanghast_aaryika.create');
    }

    public function store(SanghastAaryikaStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->aaryika->store($data) ; 
		return redirect()->route('sanghast_aaryika.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->aaryika->find($id) ;
		return view('admin.sanghast_aaryika.edit',compact('data'));
    }

    public function update(SanghastAaryikaUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->aaryika->update($data,$id) ; 
    	return redirect()->route('sanghast_aaryika.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('AaryikaId');
		$this->aaryika->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function detail($url_slug)
    {
		$data = $this->aaryika->find_data($url_slug) ;
		return view('user.aaryika_maa.sanghast_aaryika.index',compact('data'));
	}
}
