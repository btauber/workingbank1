<?php 
 $timestamp = time();
 echo $timestamp;
 $date1 = date('Y-m-d',9999999999);
  echo $date1;
  $valid_date = checkdate(38,19,2038);
  echo $valid_date;
?>