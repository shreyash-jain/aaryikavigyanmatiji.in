<?php

namespace App\Interfaces;

interface SahityaInterface 
{
	public function get();
	public function getAll();
    public function store(array $data);      
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
	
    public function getViewCount();    
    public function storeViewCount(array $data);  
}

?>