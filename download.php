<?php
include("config.php");
$dir = $logsDir;
$linelimit=-1;
$file = $_GET['file'];

if (strpos($file,".log") <= 0 && strpos($file,".LOG") <= 0) 
{
    $dir = $uploadDir;
    $linelimit=15;
}

$fp = @fopen($dir.$file,"r");
echo "<center>$file</center>";
echo "<pre>";
while (!feof($fp))
{
	$result = fgets($fp);
	echo htmlspecialchars($result);
    if (--$linelimit==0) 
    {
        echo "..............";
        break;
    }
}
fclose($fp);
echo "</pre>";
?>