<?php
namespace App\Repositories;
use App\Interfaces\ClassesInterface;
use App\Models\Classes;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
	
	class ClassesRepository implements ClassesInterface 
	{
		use FileUploadTrait;
		public function store(array $data) 
		{
			$result = new Classes;
			$result->url_slug = $data['url_slug'];
			$result->title = $data['title'];			
			$result->type = $data['type'];	
			$result->status = $data['status'];			
			$result->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			if (!empty($data['order'])) {
				$result->order = $data['order'];
			}
			if (!empty($data['thumbnail'])) {
				$result->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}			
			$result->save();
			return $result;
			
		}
		
		public function get()
		{
			return Classes::orderBy('order', 'asc')->get();
		}
		
		public function getActive()
		{
			return Classes::orderBy('order', 'asc')->orderBy('date', 'desc')->get();
		}	
		public function find($id)
		{
			return Classes::find($id);
		}	
		
		public function update($data,$id)
		{
			//echo "<pre>" ; print_r($data) ;
			$result = Classes::find($id);
			$result->url_slug = $data['url_slug'];
			$result->title = $data['title'];	
			$result->type = $data['type'];	
			$result->status = $data['status'];
			$result->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			$result->order = $data['order'];
			if (!empty($data['thumbnail'])) {
				$this->deleteFile($result->thumbnail,'frontend/images/thumbnails');
				$result->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result =	Classes::where(['id' => $id])->delete();

		}
	}
?>