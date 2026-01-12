<?php
namespace App\Repositories;
use App\Interfaces\RanoliRatnakarInterface;
use App\Models\RanoliRatnakar;
use App\Traits\FileUploadTrait;

	class RanoliRatnakarRepository implements RanoliRatnakarInterface 
	{
		use FileUploadTrait;
		public function store(array $data) 
		{
		//	echo "<pre>" ; print_r($data) ; die ; 
			$result = new RanoliRatnakar;
			$result->url_slug = $data['url_slug'];
			$result->title = $data['title'];
			$result->type = $data['type'];
			$result->status = $data['status'];			
			if (!empty($data['order'])) {
				$result->order = $data['order'];
			}			
			if (!empty($data['description'])) {
				$result->description = $data['description'];
			}			
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return RanoliRatnakar::orderBy('order', 'asc')->paginate(10);			
		}
		
		
		public function find($id)
		{
			return RanoliRatnakar::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = RanoliRatnakar::find($id);
			$result->url_slug = $data['url_slug'];
			$result->title = $data['title'];
			$result->type = $data['type'];	
			$result->status = $data['status'];
			$result->order = $data['order'];
			$result->description = $data['description'];
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result =	RanoliRatnakar::where(['id' => $id])->delete();

		}
	}
?>