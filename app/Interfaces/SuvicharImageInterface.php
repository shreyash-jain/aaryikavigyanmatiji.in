<?php

namespace App\Interfaces;

interface SuvicharImageInterface 
{
    public function store(array $data);
    public function get();    public function get_suvichar();    public function get_sanskar_manjusha();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>