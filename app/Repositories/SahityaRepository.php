<?php
namespace App\Repositories;
use App\Interfaces\SahityaInterface;
use App\Models\Sahitya;
use App\Models\ViewCount;
use App\Traits\FileUploadTrait;	

	class SahityaRepository implements SahityaInterface 
	{
		use FileUploadTrait;
		public function store(array $data) 
		{
			$result = new Sahitya;
			$result->name = $data['name'];			
			$result->category = $data['category'];			
			$result->file_type =  $data['file_type'];	
			if($data['file_type'] == 1){
				$result->file = $this->uploadFile($data['file'],'frontend/images/sahitya_file');		
			}else{
				$result->file = $data['file'];	
			}
			$result->status = $data['status'];	
			if (!empty($data['image'])) {
				$result->image = $this->uploadFile($data['image'],'frontend/images/sahitya');
			}
			if (!empty($data['order'])) {
				$result->orders = $data['order'];
			}
			if (!empty($data['title'])) {
				$result->title = $data['title'];
			}
			if (!empty($data['show_home'])) {
				$result->show_home = $data['show_home'];
			}	
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return Sahitya::orderBy('orders', 'asc')->get();
		}
		public function getAll()
		{
			return Sahitya::where('status',1)->orderBy('orders', 'asc')->get();
		}	
		public function find($id)
		{
			return Sahitya::find($id);
		}	
		public function findBySlug($string)
		{	
			return Sahitya::where($string)->orderBy('orders', 'asc')->get();
		}
		public function update($data,$id)
		{
			$result = Sahitya::find($id);
			$result->name = $data['name'];			
			$result->title = $data['title'];			
			$result->category = $data['category'];	
			$result->file_type =  $data['file_type'];	
			$result->status = $data['status'];		
			$result->orders = $data['order'];		
			if(isset($data['show_home'])) {
				$result->show_home = $data['show_home'];
			} else {
				$result->show_home = 0; 
			}
			if ($data['file_type'] == 1) {
				 if (isset($data['file']) && is_uploaded_file($data['file'])) {
					$this->deleteFile($result->file, 'frontend/images/sahitya_file');
					$result->file = $this->uploadFile($data['file'], 'frontend/images/sahitya_file');
				}
			}
			if ($data['file_type'] == 2) {
				$result->file = $data['file'];	
			}
			
			if (!empty($data['image'])) {
				$this->deleteFile($result->image,'frontend/images/sahitya');
				$result->image = $this->uploadFile($data['image'],'frontend/images/sahitya');
			}			
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result =	Sahitya::where(['id' => $id])->delete();

		}
		
		public function storeViewCount($data)
		{
			$result = new ViewCount;
			$result->link = $data['link'];
			$result->ip_address = $data['ipAddress'];
			$result->save();

			$viewCount = ViewCount::where('link', $data['link'])
                ->distinct('ip_address')
                ->count('ip_address');
				
			return $viewCount;	
		}
		
		public function getViewCount()
		{
			$viewCounts = ViewCount::selectRaw('link, COUNT(DISTINCT ip_address) as view_count')
			   ->groupBy('link')
			   ->get();

			return $viewCounts;	
		}
	}
?>