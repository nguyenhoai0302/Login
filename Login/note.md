# Xây dựng chức năng đăng nhập tren 1 thiết bị 

## Bước 1: Xây dựng Autentication

```shell
composer require laravel/ui
php artisan ui bootstrap --auth
```

## Bước 2: Phân tích Database

## Bước 3: Xây dựng Middleware

<!-- --------------------- -->
 Front-End: React -> gửi y/c xác thực "email, passwork" tới backend -> sẽ kiểm tra thông tin của y/c đó -> lúc này frontend phải gọi API của backend -> trả vể 1 token (JWT) -> Sau đó FE sẽ lưu vào cookie or local

 Back-End: Laravel 

 API -> Authentication

 Request get Data -> FE gửi token thông qua Header (Authorization: Bearer <token>)
 Server -> ktra token có hợp lệ hay không?
 -> Nếu có -> Decode Payload -> Truy vấn DB -> trả về DL
 -> Nếu không -> 1 dòng thông báo

```shell
composer require tymon/jwt-jwtauth 

```

<!-- Bài 2 -->
## Bảo mật Token

AccessToken => Nếu bị đánh cắp => Hacker khai thác dựa vào Token
-> Giải pháp: Hạ thấp thời gian sống của AccessToken -> Gây phiền pức cho người dùng 

-> Cần bổ sung: RefreshToken -> Thời gian sôngs lâu hơn -> Dùng để cấp lại AccessToken mới khi AccessToken cũ hết hạn (không quan tâm có hết hay không chỉ cần có y/c)

-> Khi logout -> Thêm Token vào Blacklist -> Khi authorization -> Cần kiểm tra token có trong blacklist
+ Tính hợp lệ
+ Thời gian sống
+ Có trong blacklist hay không


<!-- Bài 3 -->
## Truy vấn khi sd Refresh Token 
- Refresh Token hết hạn => Clien xử lý người dùng -? Call API / logout
- Cấp lại accessToken mới bằng Refresh Token -> accessToken cũ hoạt hoạt động được.
Giải pháp: Khi cấp lại accessToken mới -> Thêm accessToken cũ vào Blacklist