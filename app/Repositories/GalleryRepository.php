<?php
	namespace App\Repositories;
	use App\Interfaces\GalleryInterface;
	use App\Models\Gallery;
	use App\Traits\FileUploadTrait;
	
	class GalleryRepository implements GalleryInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$gallery = new Gallery;
			$gallery->title = $data['title'];
			$gallery->image_url = $data['image_url'];
			$gallery->status = $data['status'];
			if(!empty($data['order'])){
				$gallery->order = $data['order'];
			}
			if(isset($data['is_new'])) {
				$gallery->is_new = $data['is_new'];
			} 
			$gallery->save();
			return $gallery;
		}
		
		public function get()
		{
			/* return Gallery::where(['status' => '1'])->orderBy('order', 'asc')->get(); */			
			return Gallery::orderBy('order', 'asc')->get();					
		}  
		
		public function getActive()
		{
			return Gallery::where(['status' => '1'])->orderBy('order', 'asc')->get(); 		
		} 
		
		public function find($id)
		{
			return Gallery::find($id);
		}	
		
		public function update($data,$id)
		{
			$gallery = Gallery::find($id);
			$gallery->title = $data['title'];
			$gallery->image_url = $data['image_url'];
			$gallery->status = $data['status'];
			if(!empty($data['order'])){
				$gallery->order = $data['order'];
			}
			if(isset($data['is_new'])) {
				$gallery->is_new = $data['is_new'];
			} else {
				$gallery->is_new = 0; 
			}
				
			$gallery->save();
			return $gallery;
		}
		
		public function delete($id)
		{
		$result = Gallery::where(['id' => $id])->delete();

		}

	}
?>