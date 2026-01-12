<?php
	namespace App\Helpers;
	class Createotp { 
		/** 
	* @param int $user_id User-id 
	* 
	* @return string 
	*/
		static function generatenumber($length = 6){
			$characters = '0123456789';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
	}
?>