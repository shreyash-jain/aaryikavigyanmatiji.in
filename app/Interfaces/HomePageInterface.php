<?php

namespace App\Interfaces;

interface HomePageInterface 
{
    public function store(array $data);
    public function get();
    public function update($id,array $data);
}

?>