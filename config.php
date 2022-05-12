<?php

//Thư mục lưu bài làm trực tuyến của học sinh - cấu hình trong Themis giống như thế
$uploadDir = "D:/Chambai/Bainop/online/";	
//Thư mục đề thi - chuẩn bị trong thư mục này các file account.xml, *.jpg hoặc *.pdf, *.inp, info.php, index.html
//$contestDir = "contests/tink3kt15p"; 
$contestDir = "contests/"; 
if (substr($contestDir,-1) != "/") $contestDir.="/";
//footer
$footer = "I have a dream @ thptccva.edu.vn";
//$footer = "Bài nộp chỉ chấm với 1 test đầu tiên";






//Phần đuôi của các tệp bài tập
$duoibai=[".jpg",".png",".pdf",".doc","docx"];


if (substr($uploadDir,-1) != "/") $uploadDir.="/";
//Thư mục chứa file logs
$logsDir = $uploadDir . "Logs/";
$logssubDir = $uploadDir . "Logs/";

date_default_timezone_set("Asia/Ho_Chi_Minh"); 

	
?>