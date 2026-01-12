<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
	
	public function get_sahitya()
    {
		$query = $this->hasMany(Sahitya::class, 'category')->orderBy('orders', 'asc');
		$search = request()->input('search');
		if (!empty($search)) {
			$query->where('name', 'LIKE', "%{$search}%");
		}
		return $query->get();
		
	   /*  return $this->hasMany(Sahitya::class, 'category')->orderBy('orders', 'asc'); */		 
    }
	
	public function scopeIsParent($query)
    {
        return $query->whereNull('parent_id');
    }
	public function scopeListOrder($query)
    {
        return $query->orderBy('orders','asc');
    }
	public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('orders','asc');;
    }
}
