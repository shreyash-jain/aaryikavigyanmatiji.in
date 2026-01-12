<?php
namespace App\Repositories;
use App\Interfaces\PravachanVideoInterface;
use App\Models\PravachanVideo;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;	

	class PravachanVideoRepository implements PravachanVideoInterface 
	{
		use FileUploadTrait;
		public function store(array $data) 
		{
			$video = new PravachanVideo;
			$video->url_slug = $data['url'];
			$video->title = $data['title'];
			$video->video_type = $data['video_type'];
			$video->status = $data['status'];			
			$video->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			if (!empty($data['order'])) {
				$video->order = $data['order'];
			}			
			if (!empty($data['thumbnail'])) {
				$video->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}			
			$video->save();
			return $video;
		}
		
		public function get()
		{
			return PravachanVideo::orderBy('order', 'asc')->get();
		}
		
		public function get_pravachan()
		{
			return PravachanVideo::where('video_type', 1)->orderBy('order', 'asc')->orderBy('date', 'desc')->get();
		}		
		public function get_vidhaan()
		{
			return PravachanVideo::where(['video_type' => 2])->orderBy('order', 'asc')->orderBy('date', 'desc')->get();
		}		
		public function get_Other()
		{
			return PravachanVideo::where(['video_type' => 3])->orderBy('order', 'asc')->orderBy('date', 'desc')->get();
		}	
		public function find($id)
		{
			return PravachanVideo::find($id);
		}	
		
		public function update($data,$id)
		{
			
			$video = PravachanVideo::find($id);
			$video->url_slug = $data['url'];
			$video->title = $data['title'];
			$video->video_type = $data['video_type'];	
			$video->status = $data['status'];
			$video->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			$video->order = $data['order'];
			if (!empty($data['thumbnail'])) {
				$this->deleteFile($video->thumbnail,'frontend/images/thumbnails');
				$video->thumbnail = $this->uploadFile($data['thumbnail'],'frontend/images/thumbnails');
			}
			$video->save();
			return $video;
		}
		
		public function delete($id)
		{
		$result =	PravachanVideo::where(['id' => $id])->delete();

		}
	}
?>