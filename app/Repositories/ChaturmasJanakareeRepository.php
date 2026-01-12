<?php
	namespace App\Repositories;
	use App\Interfaces\ChaturmasJanakareeInterface;
	use App\Models\ChaturmasJanakaree;
	
	class ChaturmasJanakareeRepository implements ChaturmasJanakareeInterface 
	{		

		public function store(array $data) 
		{
			$result = new ChaturmasJanakaree;
			$result->date = $data['date'];
			$result->location = $data['location'];
			
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return ChaturmasJanakaree::get()->all();
		}	
		public function find($id)
		{
			return ChaturmasJanakaree::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = ChaturmasJanakaree::find($id);
			$result->date = $data['date'];
			$result->location = $data['location'];	
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result = ChaturmasJanakaree::where(['id' => $id])->delete();

		}

	}
?>