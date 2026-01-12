<?php

namespace App\Interfaces;

interface GalleryInterface 
{
    public function store(array $data);
    public function get();
    public function getActive();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>