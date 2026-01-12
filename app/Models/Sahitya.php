<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Sahitya extends Model
{
    use HasFactory;
	
	public function cotegoryBYCotegory()
    {
        return $this->hasOne(Category::class,'id', 'category');
    }
}
