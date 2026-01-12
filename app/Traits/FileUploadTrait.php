<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

trait FileUploadTrait
{
    /**
     * Upload a file to the specified disk and return the file path.
     *
     * @param  UploadedFile  $file
     * @param  string  $disk
     * @param  string  $path
     * @return string|null
     */
    public function uploadFile($file, string $path = '')
    {       
		$path=public_path($path);
		//echo "<pre>" ; print_r($path) ; die ;	
		$filename= time()."-".$file->getClientOriginalName();
		$file->move($path, $filename);
		return $filename ;
    }

    /**
     * Delete a file from the specified disk.
     *
     * @param  string  $filePath
     * @param  string  $disk
     * @return bool
     */
	
	public function deleteFile($file, string $path = '')
    {
		$path=public_path($path);
		$filePath = $path . '/' . $file;
	//	if (file_exists($filePath)) {
	    if (!empty($file) && file_exists($filePath)) {
			 unlink($filePath);	
		} 
     //   Storage::delete($path . '/' . $file);

        return true; // You might want to handle errors based on your specific needs
    }
}
