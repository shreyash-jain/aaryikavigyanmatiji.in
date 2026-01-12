<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
class MetaData extends Model
{
    use HasFactory;
	
		public function nameBYid()
    {
        return $this->hasOne(Page::class,'url', 'page_name');
    }
}
