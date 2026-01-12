<?php
	namespace App\Repositories;
	use App\Interfaces\VigyanMatiMatajiInterface;
	use App\Models\VigyanMatiMataji;
	use App\Traits\FileUploadTrait;
	
	class VigyanMatiMatajiRepository implements VigyanMatiMatajiInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$result = new VigyanMatiMataji;
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
			$result->current_conflict = $data['current_conflict'];
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
			if (!empty($data['aajeevan_tyaag_niyam'])) {
				$result->aajeevan_tyaag_niyam = $data['aajeevan_tyaag_niyam'];
			}	
			if (!empty($data['description'])) {
				$result->description = $data['description'];
			}	
			if (!empty($data['saanidhy_and_nirdeshan'])) {
				$result->saanidhy_and_nirdeshan = $data['saanidhy_and_nirdeshan'];
			}		
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return VigyanMatiMataji::latest()->first();
		}	
	
		
		
		public function update($data,$id)
		{
			$result = VigyanMatiMataji::find($id);
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
			$result->current_conflict = $data['current_conflict'];
			$result->aajeevan_tyaag_niyam = $data['aajeevan_tyaag_niyam'];
			$result->saanidhy_and_nirdeshan = $data['saanidhy_and_nirdeshan'];
			$result->description = $data['description'];
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

	}
?>