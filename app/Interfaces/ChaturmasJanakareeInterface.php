<?php

namespace App\Interfaces;

interface ChaturmasJanakareeInterface 
{
    public function store(array $data);
    public function get();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>