<?php
namespace App\Repositories;
use App\Interfaces\ViharInfoInterface;
use App\Models\ViharInfo;
use Carbon\Carbon;
	
	class ViharInfoRepository implements ViharInfoInterface 
	{
		public function store(array $data) 
		{
			$result = new ViharInfo;
			$result->title = $data['title'];			
			$result->address = $data['address'];			
			$result->text = $data['text'];			
			$result->start_date = Carbon::createFromFormat('d-m-Y', $data['start_date'])->format('Y-m-d');	
			$result->end_date = Carbon::createFromFormat('d-m-Y', $data['end_date'])->format('Y-m-d');	
			$result->status = $data['status'];									
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return ViharInfo::get()->all();
		}	
		public function find($id)
		{
			return ViharInfo::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = ViharInfo::find($id);
			$result->title = $data['title'];			
			$result->address = $data['address'];			
			$result->text = $data['text'];			
			$result->start_date = Carbon::createFromFormat('d-m-Y', $data['start_date'])->format('Y-m-d');
			$result->end_date = Carbon::createFromFormat('d-m-Y', $data['end_date'])->format('Y-m-d');
			$result->status = $data['status'];									
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result =	ViharInfo::where(['id' => $id])->delete();

		}
	}
?>