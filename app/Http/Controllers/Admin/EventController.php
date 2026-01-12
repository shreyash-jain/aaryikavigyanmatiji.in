<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Interfaces\EventInterface;
use Carbon\Carbon;
class EventController extends Controller
{
    private $event;
	public function __construct(EventInterface $event) 
	{
		$this->event = $event;
	}
	
    public function index()
	{
		$colours = include(app_path('Helpers/colors.php'));
		$data = $this->event->get();
		return view('admin.event.index',compact('data','colours'));
	}

    public function store(Request $request)
    {
		$data = $request->all();	
		$data = $this->event->store($data) ; 
		return response()->json(['error' =>false,'message' =>__('messages.data_has_been_added_successfully')]);															 
    }
	
	public function edit($id)
    {	
		$data = $this->event->find($id) ;	
		$data->date = Carbon::parse($data->date)->format('d-m-Y');
		return response()->json(['error' => false, 'data' => $data]);
    }

    public function update_save(Request $request)
    {		
        $data = $request->all();
		
		$id= $request->input('event_id');		
	    $data = $this->event->update($data,$id) ; 
		return response()->json(['error' =>false,'message' => __('messages.data_has_been_updated_successfully')]);		
    } 
	
    public function destroy(Request $request)
    {
		$id = $request->input('EventId');
		$this->event->delete($id) ;
		return response()->json(["error" => false, "message" => __('messages.data_has_been_deleted_successfully')]);
	}

}
