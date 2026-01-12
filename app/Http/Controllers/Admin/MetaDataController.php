<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MetaDataStoreRequest;
use App\Http\Requests\MetaDataUpdateRequest;
use App\Interfaces\MetaDataInterface;
use App\Models\Page;

class MetaDataController extends Controller
{
   private $meta_data;
	public function __construct(MetaDataInterface $meta_data) 
	{
		$this->meta_data = $meta_data;   
	}
	
    public function index()
	{
		
		$data = $this->meta_data->get();
		//echo "<pre>" ; print_r($data) ; die ;
		return view('admin.meta_data.index',compact('data'));
	}

	public function create()
    { 
		$url_data = Page::where(['status' => '1'])->get();	
		return view('admin.meta_data.create',compact('url_data'));
    }

    public function store(MetaDataStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->meta_data->store($data) ; 
		return redirect()->route('meta_data.list')->with('success', __('messages.data_has_been_added_successfully'));	
    }
	 public function edit($id)
    {	
		$url_data = Page::where(['status' => '1'])->get();			
		$data = $this->meta_data->find($id) ;
		return view('admin.meta_data.edit',compact('data','url_data'));
    }

    public function update(MetaDataUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->meta_data->update($data,$id) ; 
    	return redirect()->route('meta_data.list')->with('success', __('messages.data_has_been_updated_successfully')); 
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('MetaDataId');
		$this->meta_data->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	}
	
}
