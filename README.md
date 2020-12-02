<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Dau tien

cp .env.example .env 

composer install

php artisan key:generate

php artisan migrate:fresh --seed

php artisan cache:clear

composer dump-autoload

php artisan config:cache

php artisan serve

## File .evn

APP_NAME=Books
APP_ENV=local
APP_KEY=base64:MPE/3TTA4TUGFEhknAJ0pr87B4ouYxzhUmRS4/NmQVI=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sbooks
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=sendmail
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=truongdang20002@gmail.com
MAIL_PASSWORD=qqgnrjdajbgfujip
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=truongdang20002@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

FACEBOOK_APP_ID=3451668598242190
FACEBOOK_APP_SECRET=8550b38fe783685a2e8a1e149da08be7
FACEBOOK_REDIRECT=http://localhost:8000/oauth/facebook/callback

GOOGLE_APP_ID=852231481358-br9dhdetflqm408s28s83s21c87kehtg.apps.googleusercontent.com
GOOGLE_APP_SECRET=bG5R6ygxcdyW0CyP-Bc-xnlX
GOOGLE_REDIRECT=http://localhost:8000/oauth/google/callback
