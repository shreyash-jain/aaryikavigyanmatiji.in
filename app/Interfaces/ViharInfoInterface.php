<?php

namespace App\Interfaces;

interface ViharInfoInterface 
{
    public function store(array $data);
    public function get();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>