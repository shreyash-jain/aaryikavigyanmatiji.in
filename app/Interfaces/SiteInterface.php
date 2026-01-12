<?php

namespace App\Interfaces;

interface SiteInterface 
{
    public function store(array $data);
    public function find();
    public function update($id,array $data);
}

?>