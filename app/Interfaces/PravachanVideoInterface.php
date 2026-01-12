<?php

namespace App\Interfaces;

interface PravachanVideoInterface 
{
    public function store(array $data);
    public function get_pravachan();
    public function get();
    public function get_vidhaan();
    public function get_Other();
    public function find($id);
    public function update($id,array $data);
	public function delete($id);
}

?>