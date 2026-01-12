<?php
	namespace App\Repositories;
	use App\Interfaces\HomePageInterface;
	use App\Models\HomePage;
	use App\Traits\FileUploadTrait;
	
	class HomePageRepository implements HomePageInterface 
	{
		use FileUploadTrait;
		
		public function store(array $data) 
		{
			$result = new HomePage;
			/* $result->literature_description = $data['literature_description'];
			$result->first_suvichaar = $data['first_suvichaar'];
			$result->second_suvichaar = $data['second_suvichaar'];
			$result->third_suvichaar = $data['third_suvichaar'];
			$result->suvichar_image = $data['suvichar_image'];    */

			if (!empty($data['youtube_video_title']))			{
				$result->youtube_video_title = $data['youtube_video_title'];
			}
			if (!empty($data['youtube_video_url'])) 			{
				$result->youtube_video_url = $data['youtube_video_url'];
			}	
			if (!empty($data['thumbnail']))					{	
				$result->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/home_page');	
			}				
			if (!empty($data['background_top_image'])) {
				$result->background_top_image = $this->uploadFile($data['background_top_image'],'frontend/images/home_page');
			}
			if (!empty($data['banner_image'])) {
				$result->banner_image = $this->uploadFile($data['banner_image'],'frontend/images/home_page');
			}
			if (!empty($data['suvichar_background_image'])) {
				$result->suvichaar_background_image = $this->uploadFile($data['suvichaar_background_image'],'frontend/images/home_page');
			}
			if (!empty($data['suvichar_icon_image'])) {
				$result->suvichar_icon_image = $this->uploadFile($data['suvichar_icon_image'],'frontend/images/home_page');
			}				
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return HomePage::latest()->first();
		}	
		
		public function update($data,$id)
		{
			$result = HomePage::find($id);
			/* $result->literature_description = $data['literature_description'];
			$result->first_suvichaar = $data['first_suvichaar'];
			$result->second_suvichaar = $data['second_suvichaar'];
			$result->third_suvichaar = $data['third_suvichaar'];
			$result->suvichar_image = $data['suvichar_image']; */	
			$result->youtube_video_title = $data['youtube_video_title']; 
			$result->youtube_video_url = $data['youtube_video_url']; 
			
			if (!empty($data['thumbnail'])) {
				$this->deleteFile($result->thumbnail,'frontend/images/home_page');
				$result->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/home_page');
			}else{
				$result->thumbnail = null;
			}
			if (!empty($data['background_top_image'])) {
				$this->deleteFile($result->background_top_image,'frontend/images/home_page');
				$result->background_top_image = $this->uploadFile($data['background_top_image'],'frontend/images/home_page');
			}
			if (!empty($data['banner_image'])) {
				$this->deleteFile($result->banner_image,'frontend/images/home_page');
				$result->banner_image = $this->uploadFile($data['banner_image'],'frontend/images/home_page');
			}
			if (!empty($data['suvichar_background_image'])) {
				$this->deleteFile($result->suvichar_background_image,'frontend/images/home_page');
				$result->suvichar_background_image = $this->uploadFile($data['suvichar_background_image'],'frontend/images/home_page');
			}
			if (!empty($data['suvichar_icon_image'])) {
				$this->deleteFile($result->suvichar_icon_image,'frontend/images/home_page');
				$result->suvichar_icon_image = $this->uploadFile($data['suvichar_icon_image'],'frontend/images/home_page');
			}
			$result->update();
			return $result;
		}
		
	}
?>