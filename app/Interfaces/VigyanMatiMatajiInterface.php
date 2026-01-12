<?php

namespace App\Interfaces;

interface VigyanMatiMatajiInterface 
{
    public function get();
	public function store(array $data);
    public function update($id,array $data);
}

?>