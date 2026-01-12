<?php

namespace App\Interfaces;

interface SanghasthBrahmacharyBahaneInterface 
{
    public function get();
	public function store(array $data);
    public function find($id);
    public function find_data($url_slug);
    public function update($id,array $data);
	public function delete($id);
}

?>