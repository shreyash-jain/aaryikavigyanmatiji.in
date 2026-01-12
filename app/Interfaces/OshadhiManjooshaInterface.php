<?php

namespace App\Interfaces;

interface OshadhiManjooshaInterface 
{
    public function store(array $data);
    public function get();
    public function getByOrder();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>