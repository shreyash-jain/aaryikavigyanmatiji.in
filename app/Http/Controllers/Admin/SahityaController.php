<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SahityaStoreRequest;
use App\Http\Requests\SahityaUpdateRequest;
use App\Interfaces\SahityaInterface;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class SahityaController extends Controller
{

    private $sahitya;
    private $category;
	public function __construct(SahityaInterface $sahitya , CategoryInterface $category) 
	{
		$this->sahitya = $sahitya;
		$this->category = $category;
	}
	
    public function index()
	{
		$data = $this->sahitya->get();
		return view('admin.sahitya.list',compact('data'));
	}

	public function create()
    { 
		$data = Category::whereNotNull('parent_id')->get();
		return view('admin.sahitya.create',compact('data'));
    }

    public function store(SahityaStoreRequest $request)
    {
		$data = $request->all();
//echo '<pre>'; print_r($data); die; 		
		$data = $this->sahitya->store($data) ; 
		return redirect()->route('sahitya.list')->with('success',__('messages.data_has_been_added_successfully')); 
															
    }
	 public function edit($id)
    {	
		$data = $this->sahitya->find($id) ;
		$category_data = Category::whereNotNull('parent_id')->get();
		return view('admin.sahitya.edit',compact('data','category_data'));
    }

    public function update(SahityaUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->sahitya->update($data,$id) ; 
    	return redirect()->route('sahitya.list')->with('success', __('messages.data_has_been_updated_successfully')); 	
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('SahityaId');
		$this->sahitya->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	} 
	
	public function getBySlug($url_slug)
    {
		$views= $this->sahitya->getViewCount(); 
		$category= $this->category->getBySlug($url_slug); 
		if($category === null){
			abort(403, __('messages.something_went_wrong_in_URL'));
		}		    
		$sahitya = $category->get_sahitya();

		return view('user.sahitya.index', compact('category', 'sahitya', 'views'));
	}
	
	public function getAllSahitya(Request $request)
    {
		$views= $this->sahitya->getViewCount(); 
		$all_sahitya= $this->sahitya->getAll(); 
		
		return view('user.sahitya.all_sahitya', compact('all_sahitya','views'));
	}
	public function action(Request $request)
    {		
		$data['link'] = $request->input('Link');
		$data['ipAddress'] = $request->ip();	
        $viewCount= $this->sahitya->storeViewCount($data) ; 		

		return response()->json([
			'error' => false,
			'viewCount' => $viewCount,
		]);
	}
}


