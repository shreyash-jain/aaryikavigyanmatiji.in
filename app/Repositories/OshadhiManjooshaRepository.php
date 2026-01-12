<?php
	namespace App\Repositories;
	use App\Interfaces\OshadhiManjooshaInterface;
	use App\Models\OshadhiManjoosha;
	
	class OshadhiManjooshaRepository implements OshadhiManjooshaInterface 
	{		

		public function store(array $data) 
		{
			$result = new OshadhiManjoosha;
			$result->name = $data['name'];
			$result->short_description = $data['short_description'];
			$result->description = $data['description'];
			$result->status = $data['status'];
			if(!empty($data['order'])){
				$result->order = $data['order'];
			}
			if (!empty($data['show_home'])) {
				$result->show_home = $data['show_home'];
			}	
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return OshadhiManjoosha::orderBy('order', 'asc')->paginate(10);					
		}  
		public function getByOrder()
		{
			$search =  request()->input('search'); 
			$query = OshadhiManjoosha::where('status',1);
			if (!empty($search)) {
				$query->where('name', 'LIKE', "%{$search}%");
			}
			$query->orderBy('order', 'asc');
			return $query->paginate(10);		
		}  
		public function find($id)
		{
			return OshadhiManjoosha::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = OshadhiManjoosha::find($id);
			$result->name = $data['name'];
			$result->short_description = $data['short_description'];
			$result->description = $data['description'];
			$result->status = $data['status'];
			$result->order = $data['order'];
			if(isset($data['show_home'])) {
				$result->show_home = $data['show_home'];
			} else {
				$result->show_home = 0; 
			}	
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result = OshadhiManjoosha::where(['id' => $id])->delete();

		}

	}
?>