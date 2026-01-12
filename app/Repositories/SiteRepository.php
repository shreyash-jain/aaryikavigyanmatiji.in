<?php
	namespace App\Repositories;
	use App\Interfaces\SiteInterface;
	use App\Models\Site;
	use App\Traits\FileUploadTrait;
	
	class SiteRepository implements SiteInterface 
	{
		use FileUploadTrait;
		
		public function store(array $data) 
		{
			$site = new Site;
			$site->site_name = $data['site_name'];
			$site->email = $data['email'];
			$site->footer_description = $data['footer_description'];
			$site->site_keyword = $data['site_keyword'];
			$site->copyrigt_text = $data['copyrigt_text'];
			$site->defaut_language = $data['language'];
			$site->mobile_number = $data['mobile_number'];
			$site->facebook_url = $data['facebook_url'];
			$site->twitter_url = $data['twitter_url'];
			$site->instagram_url = $data['instagram_url'];
			$site->youtube_url = $data['youtube_url'];						$site->whatsapp_url = $data['whatsapp_url'];			$site->address = $data['address'];
			if (!empty($data['second_mobile_number'])) {
				$site->mobile_number_1 = $data['second_mobile_number'];
			}
			if (!empty($data['header_logo'])) {
				$site->header_logo = $this->uploadFile($data['header_logo'],'frontend/images/site');
			}
			if (!empty($data['site_favicon'])) {
				$site->site_favicon = $this->uploadFile($data['site_favicon'],'frontend/images/site');
			}
			if (!empty($data['footer_logo'])) {
				$site->footer_logo = $this->uploadFile($data['footer_logo'],'frontend/images/site');
			}
				
			$site->save();
			return $site;
		}
		
		public function find()
		{
			return Site::latest()->first();
		}	
		
		public function update($data,$id)
		{
			$site = Site::find($id);
			$site->site_name = $data['site_name'];
			$site->email = $data['email'];
			$site->footer_description = $data['footer_description'];
			$site->site_keyword = $data['site_keyword'];
			$site->copyrigt_text = $data['copyrigt_text'];
			$site->defaut_language = $data['language'];
			$site->mobile_number = $data['mobile_number'];
			$site->facebook_url = $data['facebook_url'];
			$site->twitter_url = $data['twitter_url'];
			$site->instagram_url = $data['instagram_url'];
			$site->youtube_url = $data['youtube_url'];									$site->whatsapp_url = $data['whatsapp_url'];			$site->address = $data['address'];
			if (!empty($data['second_mobile_number'])) {
				$site->mobile_number_1 = $data['second_mobile_number'];
			}
			if (!empty($data['header_logo'])) {
				$this->deleteFile($site->header_logo,'frontend/images/site');
				$site->header_logo = $this->uploadFile($data['header_logo'],'frontend/images/site');
			}
			if (!empty($data['site_favicon'])) {
				$this->deleteFile($site->site_favicon,'frontend/images/site');
				$site->site_favicon = $this->uploadFile($data['site_favicon'],'frontend/images/site');
			}
			if (!empty($data['footer_logo'])) {
				$this->deleteFile($site->footer_logo,'frontend/images/site');
				$site->footer_logo = $this->uploadFile($data['footer_logo'],'frontend/images/site');
			}
			$site->update();
			return $site;
		}
		

	}
?>