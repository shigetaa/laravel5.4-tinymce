# laravel5.4-tinymce

## 特徴
laravel フレームワークで、リッチエディタ「TinyMCE」を利用できるようにする。

## インストール
``` bash
# composer require shigetaa/laravel5.4-tinymce
```

## 設定ファイルのprovidersに追記します。 
``` bash
# vim config/app.php
```
``` php
    'providers' => [
        Shigetaa\Tinymce\TinymceServiceProvider::class,
    ],
```

## パッケージファイルを指定された場所へ配置する
既存のファイルをオーバーライトしたい場合は、--force を使用します。
``` bash
# php artisan vendor:publish --force
```

## 使用方法
読み込みページのBladeファイルに追記する
下記の include を追記する。
``` php
@include('tinymce::load')
```
