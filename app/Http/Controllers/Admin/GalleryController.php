<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryStoreRequest;
use App\Http\Requests\GalleryUpdateRequest;
use App\Models\Gallery;
use App\Interfaces\GalleryInterface;   
 
class GalleryController extends Controller
{
	private $gallery;
	public function __construct(GalleryInterface $gallery) 
	{
		$this->gallery = $gallery;   
	}
	
    public function index()
	{
		$data = $this->gallery->get();
		return view('admin.gallery.index',compact('data'));
	}

	public function create()
    { 
		return view('admin.gallery.create');
    }

    public function store(GalleryStoreRequest $request)
    {
		$data = $request->all();	
		$data = $this->gallery->store($data) ; 
		return redirect()->route('gallery.list')->with('success', __('messages.data_has_been_added_successfully'));	
    }
	 public function edit($id)
    {	
		$data = $this->gallery->find($id) ;
		return view('admin.gallery.edit',compact('data'));
    }

    public function update(GalleryUpdateRequest $request, $id)
    {
        $data = $request->all();	
	    $data = $this->gallery->update($data,$id) ; 
    	return redirect()->route('gallery.list')->with('success', __('messages.data_has_been_updated_successfully')); 
    } 

    public function destroy(Request $request)
    {
		$id = $request->input('GalleryId');
		$this->gallery->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	}
	
    public function getall()
    {
		$data = $this->gallery->getActive();
		//echo "<pre>"; print_r($data); die;
		return view('user.gallery.index',compact('data'));
	}
}


