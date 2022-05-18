# web4themis
Website để nộp bài và chấm bài tự động bằng [Themis](https://drive.google.com/file/d/1Zz3uXuTtG51N579zSmhtqWslgI82x8pH/view?usp=sharing). Mỗi kì thi đặt trong một thư mục riêng. Vì vậy hệ thống này cho phép tổ chức thi nhiều kì thi riêng lẻ cùng một lúc trên một máy chủ.

by Tran Huu Nam - huunam0[at]gmail.com - 2022

## Cài đặt

Bạn cần cài trước sẵn một web server như apache,... và PHP. Có thể dùng portable webserver (bản này không cần cài đặt) tôi đề xuất.

Tải project này về và giải nén vào thư mục gốc (www) của webserver.

## Chuẩn bị một kì thi

Trong thư mục **contests** là các kì thi, mỗi kì thi là 1 thư mục, tên thư mục là mã kì thi (cho nên đặt tên ngắn gọn, không dấu cách, không dấu tiếng Việt). 

Trong thư mục kì thi chứa các tệp: [Minh hoạ](https://github.com/huunam0/web4themis/blob/main/temp/thumuc.png)

+ account.xml : tài khoản của thí sinh, mở để sửa bằng excel [Minh hoạ](https://github.com/huunam0/web4themis/blob/main/temp/account.png)
+ info.php : thông tin về kì thi
+ Các tệp đề bài, chấp nhận đuôi jpg, png, pdf, docx
+ Các tệp input / output mẫu (nếu cần)

Cấp tài khoản cho học sinh.

## Tiến hành thi

1. Chạy Themis, cấu hình thư mục nộp bài online [minh hoạ](https://github.com/huunam0/web4themis/blob/main/temp/cauhinh.png)
2. Chạy webserver, bật PHP
3. Lấy địa chỉ IP của máy chủ để thông báo cho thí sinh.
4. Thí sinh gõ địa chỉ IP đó vào thanh địa chỉ trình duyệt
5. Thí sinh login với 3 thông tin: [Minh hoạ](https://github.com/huunam0/web4themis/blob/main/temp/dangnhap.png)
  + Mã kì thi: tên thư mục kì thi;
  + Username
  + Mật khẩu
6. Thí sinh xem đề, làm bài và nộp bài.[Minh hoạ](https://github.com/huunam0/web4themis/blob/main/temp/giadien.png)
