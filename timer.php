<?php
	include("config.php");
	include($contestDir . "info.php");
	//date_default_timezone_set("Asia/Bangkok"); 
	$t = $begintime + $duringTime*60 - time();
	$tgchonop=60;
	echo "<script>var conlai = $t;</script>";
	//print_r ($begintime);
	if ($t > $duringTime*60) {
		$t -= $duringTime*60;
		
		$h = ($t - $t%3600)/3600;
		$t =  $t%3600;
		$m = ($t - $t%60)/60;
		$s = $t%60;
		echo "- Sẽ bắt đầu sau: ".$h .":".sprintf("%02d", $m).":".sprintf("%02d", $s);
	} else if ($t > 0) {
		$h = ($t - $t%3600)/3600;
		$t =  $t%3600;
		$m = ($t - $t%60)/60;
		$s = $t%60;
		echo "- Thời gian còn lại: ".$h .":".sprintf("%02d", $m).":".sprintf("%02d", $s);
	} else if ($t > -$tgchonop) {
		$t = $tgchonop + $t;
		$m = ($t - $t%60)/60;
		$s = $t%60;
		echo "- Thời gian còn lại: 0:00:00 + Nộp bài: 0:".$m.":".sprintf("%02d", $s);
	} else {
		echo "Đã hết thời gian làm bài.";
	}	
?>