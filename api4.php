<?php

$current_date=$_GET["current_date"];//should be of the following format: YYYY-MM-DD
$curr_date_in_sec=strtotime($current_date);
$target_date = strtotime("2022-12-25");
$diff_in_seconds = $target_date-$curr_date_in_sec;
$diff_in_days = round($diff_in_seconds / (60 * 60 * 24));
echo"$diff_in_days"." days left";

?>