<?php
$server='nse_fno_nifty_08122022_18600_pe';
$a='http://139.59.221.16:4001/api/scrips/feed?channel_names='.$server;
$a=file_get_contents($a);
$a=json_decode($a,true);
$a=($a[$server]);
$temp_ltp=substr($a, 0, strpos($a, '|'));
echo($temp_ltp);
?>