# Xây dựng chức năng đăng nhập tren 1 thiết bị 

## Bước 1: Xây dựng Autentication

```shell
composer require laravel/ui
php artisan ui bootstrap --auth
```

## Bước 2: Phân tích Database

## Bước 3: Xây dựng Middleware

<!-- --------------------- -->
## Front-End: React -> gửi y/c xác thực "email, passwork" tới backend -> sẽ kiểm tra thông tin của y/c đó -> lúc này frontend phải gọi API của backend -> trả vể 1 token (JWT) -> Sau đó FE sẽ lưu vào cookie or local

## Back-End: Laravel 

## API -> Authentication

## Request get Data -> FE gửi token thông qua Header (Authorization: Bearer <token>)
## Server -> ktra token có hợp lệ hay không?
## -> Nếu có -> Decode Payload -> Truy vấn DB -> trả về DL
## -> Nếu không -> 1 dòng thông báo

```shell
composer require tymon/jwt-jwtauth 

```