
<?php 
$time = '1994-10-28'; 
$datetime1 = date_create($time); 
$datetime2 = date_create('now',new DateTimeZone('Europe/Moscow')); 
$interval = date_diff($datetime1, $datetime2); 
print_r ($interval->format('%y years %M months %D days %H hours %i minuts %s secound')); 
?>