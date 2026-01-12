<?php
namespace App\Repositories;
use App\Interfaces\SuvicharImageInterface;
use App\Models\SuvicharImage;
use App\Traits\FileUploadTrait;
	
	class SuvicharImageRepository implements SuvicharImageInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$result = new SuvicharImage;
			$result->status = $data['status'];
			$result->title = $data['title'];
			$result->type = $data['type'];
			$result->image_url = $data['image_url'];
			if (!empty($data['order'])) {
				$result->orders = $data['order'];
			}
			if (!empty($data['show_home'])) {
				$result->show_home = $data['show_home'];
			}	
				
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return SuvicharImage::get()->All();
		}
		
		public function get_suvichar()
		{
			return SuvicharImage::where(['type' => '1'])->get();
		}
		
		public function get_sanskar_manjusha()
		{
			return SuvicharImage::where(['type' => '2'])->get();
		}	
		
		public function find($id)
		{
			return SuvicharImage::find($id);
		}	
		
		public function update($data,$id)
		{			$result = SuvicharImage::find($id);
			$result->status = $data['status'];
			$result->title = $data['title'];
			$result->image_url = $data['image_url'];
			$result->type = $data['type'];
			$result->orders = $data['order'];
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
		$result =	SuvicharImage::where(['id' => $id])->delete();

		}
	}
?>