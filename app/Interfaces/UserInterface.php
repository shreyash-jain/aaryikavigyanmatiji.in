<?php

namespace App\Interfaces;

interface UserInterface 
{
	public function changepassword($data);
	public function update($data,$id);
	public function getById($id);
}

?>