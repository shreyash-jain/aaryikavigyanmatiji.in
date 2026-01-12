<?php

namespace App\Helpers;
use Carbon\Carbon;
	class Helper
	{
		static	function formatDates($date)
		{
			return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-M-Y');
		}		
	}
?>
	
	
	