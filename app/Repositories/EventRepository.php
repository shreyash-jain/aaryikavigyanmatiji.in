<?php
	namespace App\Repositories;
	use App\Interfaces\EventInterface;
	use App\Models\Event;
	use Carbon\Carbon;
	class EventRepository implements EventInterface 
	{		

		public function store(array $data) 
		{
			$result = new Event;
			$result->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');	
			$result->description = $data['description'];
			$result->colour = $data['colour'];
			$result->text_colour = $data['text_colour'];
			
			$result->save();
			return $result;
		}
		
		public function get()
		{
			return Event::orderBy('date', 'asc')->get();
		}	
		public function find($id)
		{
			return Event::find($id);
		}	
		
		public function update($data,$id)
		{
			$result = Event::find($id);
			$result->date = Carbon::createFromFormat('d-m-Y', $data['date'])->format('Y-m-d');
			$result->description = $data['description'];
			$result->colour = $data['colour'];	
			$result->text_colour = $data['text_colour'];	
			$result->save();
			return $result;
		}
		
		public function delete($id)
		{
		$result = Event::where(['id' => $id])->delete();

		}

	}
?>