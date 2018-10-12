<?php

//years months days hours minuts secound
$time = '2018-10-12 12:21:12'; 
$datetime1 = date_create($time); 
$datetime2 = date_create('now',new DateTimeZone('Europe/Moscow')); 
$interval = date_diff($datetime1, $datetime2); 
//print_r ($interval->format('%y years %M months %D days %H hours %i minuts %s secound'));
//echo "</br>";
if ($interval->format('%y') != 0) {
	print_r($interval->format('%y years ago'));
}elseif($interval->format('%M') != 0 ) {
	print_r($interval->format('%M months ago'));
} elseif ($interval->format('%D') != 0) {
	print_r($interval->format('%D days ago'));
} elseif ($interval->format('%H') != 0) {
	print_r($interval->format('%H hours ago'));
} elseif ($interval->format('%i') != 0) {
	print_r($interval->format('%i minuts ago'));
} elseif ($interval->format('%s') !=0 ) {
	print_r('just now');
}


?>