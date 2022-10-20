<p align="center"><a href="https://prodia.com" target="_blank"><img src="https://prodia.co.id/Assets/assets/prodia.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

- composer install
- npm install
- npm run prod
- php artisan migrate:fresh --seed
- php artisan weather:seed
- php artisan serve

###Login Akun
```json
{
    "email": "admin@prodia.com",
    "password": "secret"
}
```
###API endpoint

`/api/v1/weather?city=` 

```json
{
    "status": true,
    "data": [
        {
            "city": "Bandung",
            "timezone": 25200,
            "weather": {
                "main": "Clouds",
                "description": "overcast clouds"
            },
            "main": {
                "pressure": 1012,
                "humidity": 93
            },
            "wind": {
                "speed": 0.8,
                "deg": 10
            },
            "coord": {
                "lon": 107.6186,
                "lat": -6.9039
            }
        }
    ]
}
```
