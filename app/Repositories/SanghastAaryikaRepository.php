<?php
	namespace App\Repositories;
	use App\Interfaces\SanghastAaryikaInterface;
	use App\Models\SanghastAaryika;
	use App\Traits\FileUploadTrait;
	
	class SanghastAaryikaRepository implements SanghastAaryikaInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$result = new SanghastAaryika;
			$result->name = $data['mata_ji_name'];
			$result->old_name = $data['old_name'];
			$result->father_name = $data['father_name'];
			$result->mother_name = $data['mother_name'];
			$result->date_of_birth = $data['date_of_birth'];
			$result->birth_place = $data['birth_place'];
			$result->secular_education = $data['secular_education'];
			$result->aryika_diksha = $data['aryika_diksha'];
			$result->initiation_guru = $data['initiation_guru'];
			$result->diksha_detail = $data['diksha_detail'];
			$result->url_slug = $data['url_slug'];
			$result->current_conflict = $data['current_conflict'];
			$result->serial_number = $data['serial_number'];
			$result->vrat_guru = $data['vrat_guru'];  
			$result->brahmacharya_vrat = $data['brahmacharya_vrat']; 
			$result->mother_tongue = $data['mother_tongue']; 
			if (!empty($data['image'])) {
				$result->image = $this->uploadFile($data['image'],'frontend/images/aaryika');
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
			return SanghastAaryika::orderBy('serial_number')->get();
		}	
		public function find($id)
		{
			return SanghastAaryika::find($id);
		}	
		public function find_data($url_slug)
		{
			return  SanghastAaryika::where('url_slug', $url_slug)->first();
		}	
		
		public function update($data,$id)
		{
			$result = SanghastAaryika::find($id);
			$result->name = $data['mata_ji_name'];
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
			$result->description = $data['text']; 
			if (!empty($data['image'])) {
				$this->deleteFile($result->image,'frontend/images/aaryika');
				$result->image = $this->uploadFile($data['image'],'frontend/images/aaryika');
			}	
				$result->brother_sister = $data['brother_sister'];
				$result->husband_name = $data['husband_name'];
				$result->marriage = $data['marriage'];
				$result->mausoleum = $data['mausoleum'];
			$result->save();
			return $result;	
		}
		
		public function delete($id)
		{
			$result =	SanghastAaryika::where(['id' => $id])->delete();

		}

	}
?>