<?php
	namespace App\Repositories;
	use App\Interfaces\MetaDataInterface;
	use App\Models\MetaData;
	
	class MetaDataRepository implements MetaDataInterface 
	{		

		public function store(array $data) 
		{
			$result = new MetaData;
			$result->page_name = $data['page_name'];
			$result->title = $data['title'];
			$result->keywords = $data['keywords'];
			if(!empty($data['description'])){
				$result->description = $data['description'];
			}
			$result->status = $data['status'];
			
			$result->save();
			return $result;
		}
		
		public function get()
		{
			/* return Gallery::where(['status' => '1'])->orderBy('order', 'asc')->get(); */			
			return MetaData::get();					
		}  
		public function find($id)
		{
			return MetaData::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = MetaData::find($id);
			$result->page_name = $data['page_name'];
			$result->title = $data['title'];
			$result->keywords = $data['keywords'];
			$result->description = $data['description'];
			$result->status = $data['status'];
			
				
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result = MetaData::where(['id' => $id])->delete();

		}

	}
?>