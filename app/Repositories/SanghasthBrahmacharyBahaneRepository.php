<?php
	namespace App\Repositories;
	use App\Interfaces\SanghasthBrahmacharyBahaneInterface;
	use App\Models\SanghasthBrahmacharyBahane;
	use App\Traits\FileUploadTrait;
	
	class SanghasthBrahmacharyBahaneRepository implements SanghasthBrahmacharyBahaneInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$result = new SanghasthBrahmacharyBahane;
			$result->name = $data['name'];
			$result->father_name = $data['father_name'];
			$result->mother_name = $data['mother_name'];
			$result->date_of_birth = $data['date_of_birth'];
			$result->birth_place = $data['birth_place'];
			$result->secular_education = $data['secular_education'];
			$result->url_slug = $data['url_slug'];
			$result->current_conflict = $data['current_conflict'];
			$result->serial_number = $data['serial_number'];  
			if(!empty($data['vrat_guru'])){
				$result->vrat_guru = $data['vrat_guru'];    
			}
			if(!empty($data['brahmacharya_vrat'])){
				$result->brahmacharya_vrat = $data['brahmacharya_vrat'];    
			}
			if(!empty($data['pratimae'])){
				$result->pratimae = $data['pratimae'];    
			}
			if(!empty($data['pratham_kenshaloch'])){
				$result->pratham_kenshaloch = $data['pratham_kenshaloch'];    
			}
			$result->mother_tongue = $data['mother_tongue'];          
			if (!empty($data['image'])) {
				$result->image = $this->uploadFile($data['image'],'frontend/images/aaryika');
			}	
			if (!empty($data['date_place'])) {
				$result->date_place = $data['date_place'];
			}		
			if (!empty($data['old_name'])) {
				$result->old_name = $data['old_name'];
			}	
			if (!empty($data['brother_sister'])) {
				$result->brother_sister = $data['brother_sister'];
			}	
			if (!empty($data['husband_name'])) {
				$result->husband_name = $data['husband_name'];
			}	
			if (!empty($data['marriage'])) {
				$result->marriage = $data['marriage'];
			}	
			if (!empty($data['aryika_diksha'])) {
				$result->aryika_diksha = $data['aryika_diksha'];
			}	
			if (!empty($data['initiation_guru'])) {
				$result->initiation_guru = $data['initiation_guru'];
			}		
			if (!empty($data['diksha_detail'])) {
				$result->diksha_detail = $data['diksha_detail'];
			}	
			if (!empty($data['mausoleum'])) {
				$result->mausoleum = $data['mausoleum'];
			}
			if (!empty($data['text'])) {
				$result->description = $data['text'];
			}		
			if (!empty($data['homelessness'])) {
				$result->homelessness = $data['homelessness'];
			}
			if (!empty($data['holding_the_statue'])) {
				$result->holding_the_statue = $data['holding_the_statue'];
			}
			if (!empty($data['interests'])) {
				$result->interests = $data['interests'];
			}
			if (!empty($data['specialty'])) {
				$result->specialty = $data['specialty'];
			}
			if (!empty($data['initiated_disciples'])) {
				$result->initiated_disciples = $data['initiated_disciples'];
			}
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return SanghasthBrahmacharyBahane::orderBy('serial_number')->get();
		}	
		public function find($id)
		{
			return SanghasthBrahmacharyBahane::find($id);
		}	
		public function find_data($url_slug)
		{
			return  SanghasthBrahmacharyBahane::where('url_slug', $url_slug)->first();
		}	
		
		public function update($data,$id)
		{
			$result = SanghasthBrahmacharyBahane::find($id);
			$result->name = $data['name'];
			$result->old_name = $data['old_name'];
			$result->father_name = $data['father_name'];
			$result->mother_name = $data['mother_name'];
			$result->date_of_birth = $data['date_of_birth'];
			$result->birth_place = $data['birth_place'];
			$result->secular_education = $data['secular_education'];
			$result->homelessness = $data['homelessness'];
			$result->holding_the_statue = $data['holding_the_statue'];
			$result->aryika_diksha = $data['aryika_diksha'];
			$result->initiation_guru = $data['initiation_guru'];
			$result->interests = $data['interests'];
			$result->specialty = $data['specialty'];
			$result->initiated_disciples = $data['initiated_disciples'];
			$result->diksha_detail = $data['diksha_detail'];
			$result->url_slug = $data['url_slug'];
			$result->current_conflict = $data['current_conflict'];
			$result->serial_number = $data['serial_number'];	
			$result->vrat_guru = $data['vrat_guru'];   
			$result->brahmacharya_vrat = $data['brahmacharya_vrat'];    
			$result->mother_tongue = $data['mother_tongue']; 
			$result->pratimae = $data['pratimae'];          
			$result->pratham_kenshaloch = $data['pratham_kenshaloch'];          
			$result->date_place = $data['date_place'];  
			if (!empty($data['image'])) {	
				$this->deleteFile($result->image,'frontend/images/aaryika');
				$result->image = $this->uploadFile($data['image'],'frontend/images/aaryika');
			}	
			$result->brother_sister = $data['brother_sister'];
			$result->husband_name = $data['husband_name'];
			$result->marriage = $data['marriage'];
			$result->mausoleum = $data['mausoleum'];	
			$result->description = $data['text'];
			
			$result->save();
			return $result;	
		}
		
		public function delete($id)
		{
			$result =	SanghasthBrahmacharyBahane::where(['id' => $id])->delete();

		}

	}
?>