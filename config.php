<?php
//File cấu hình chung cho kì thi - Tran Huu Nam - huunam0@gmail.com 

//Thư mục lưu bài làm trực tuyến của học sinh - cấu hình trong Themis giống như thế
$uploadDir = "D:/Chambai/Bainop/online/";	
if (substr($uploadDir,-1) != "/") $uploadDir.="/";

//Thư mục đề thi - chuẩn bị trong thư mục này các file account.xml, info.php, index.html và đề thi (*.jpg hoặc *.png hoặc *.pdf hoặc *.docx)
//$contestDir = "contests/tink3kt15p"; 
$contestDir = "contests/"; 
if (substr($contestDir,-1) != "/") $contestDir.="/";

//Dòng chữ footer
$footer = "I have a dream @ thptccva.edu.vn";


//Phần đuôi của các tệp bài tập
$duoibai=[".jpg", ".png", ".pdf", ".doc", "docx"];



//Thư mục chứa file logs
$logsDir = $uploadDir . "Logs/";
$logssubDir = $uploadDir . "Logs/";

date_default_timezone_set("Asia/Ho_Chi_Minh"); 
	
?>
