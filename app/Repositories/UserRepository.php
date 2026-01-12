<?php
	namespace App\Repositories;
	use App\Interfaces\UserInterface;
	use App\Models\User;
	use Illuminate\Support\Facades\Hash;
	use Auth;
	
	class UserRepository implements UserInterface 
	{
		public function changepassword($data)
		{
			return User::whereId(Auth::user()->id)->update([
						'password' => Hash::make($data)
					]);				
		}
		
		public function update($data,$id)
		{
			$user = User::find($id);
			$user->name = $data['name'];
			$user->save();		
			
			return $user;
		}
		

		
		public function getById($id)
		{
			return User::find($id);
		}
	}
?>