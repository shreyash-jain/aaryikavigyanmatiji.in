<?php
	namespace App\Repositories;
	use App\Interfaces\CategoryInterface;
	use File;
	use App\Helpers\Media;
	use App\Models\Category;
	
	class CategoryRepository implements CategoryInterface 
	{
		public function getBySlug($slug)
		{
			return Category::where('url_slug',$slug)->first(); 
		}
	}
?>