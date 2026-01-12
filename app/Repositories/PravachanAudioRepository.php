<?php
namespace App\Repositories;
use App\Interfaces\PravachanAudioInterface;
use App\Models\PravachanAudio;
use App\Traits\FileUploadTrait;use Carbon\Carbon;
	
	class PravachanAudioRepository implements PravachanAudioInterface 
	{
		use FileUploadTrait;
		

		public function store(array $data) 
		{
			$audio = new PravachanAudio;
			$audio->url_slug = $data['url'];
			$audio->title = $data['title'];	
			$audio->status = $data['status'];	
			$audio->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			if (!empty($data['order'])) {	
				$audio->order = $data['order'];	
			}	
			if (!empty($data['thumbnail'])) {
				$audio->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}						
			$audio->save();
			return $audio;
		}
		
		public function get()
		{
			return PravachanAudio::get()->all();
		}	
		public function find($id)
		{
			return PravachanAudio::find($id);
		}	
		
		public function update($data,$id)
		{
			$audio = PravachanAudio::find($id);
			$audio->url_slug = $data['url'];
			$audio->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');			
			$audio->title = $data['title'];		
			$audio->status = $data['status'];	
			$audio->order = $data['order'];	
			if (!empty($data['thumbnail'])) {
				$this->deleteFile($audio->thumbnail,'frontend/images/thumbnails');
				$audio->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}	
			$audio->save();
			return $audio;
		}
		
		public function delete($id)
		{
		$result =	PravachanAudio::where(['id' => $id])->delete();

		}
	}
?>