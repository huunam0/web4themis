<?php
//Tran Huu Nam - huunam@gmail.com 

//Tên kì thi
$contestName = "BÀI THI CHỌN HSG LỚP 11"; 

//Mô tả kỳ thi
$description = "Goodluck";
//$description = "<a href = 'help'>Tài liệu</a>";

//Dòng hướng dẫn khi đăng nhập
$huongdanlogin = 'Mật khẩu: ngàythángnămsinh (8 chữ số) <a target="_blank" href="img/tktink3.png">...</a>';

//Đặt tên cho các bài toán, có thể không dùng
$problemname=array(
	"number" => "Số lỗ hổng",
	"tong" => "Tổng lớn nhất",
	"group" => "Nhóm hình đồng dạng"
);


//Thời điểm bắt đầu kì thi (định dạng HH, MM, SS, MM, DD, YYYY)
$begintime = mktime(7, 30, 0, 11, 19, 2020);

//Thời gian làm bài - (đặt 0: không giới hạn)
$duringTime = 0; //(phút)

//1: Công bố kết quả live sau khi chấm, 0: không công bố.
$publish = 1;
?>
