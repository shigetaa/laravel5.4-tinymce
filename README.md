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
        shigetaa\Tinymce\TinymceServiceProvider::class,
    ],
```

## パッケージファイルを指定された場所へコピーされます。
既存のファイルをオーバーライトしたい場合は、--force を使用します。
``` bash
# php artisan vendor:publish --force
```

## WYSIWYG「TinyMCE」設定
``` bash
# config/tinymce.php
```

``` php
<?php
return [
	// 'cdn' => $app->runningInConsole() ? config('app.url') : url('vendor/js/tinymce/tinymce.min.js'),
	'cdn' => config('app.url') . '/vendor/js/tinymce/tinymce.min.js',
	'default' => [
		"selector" => "textarea",
		"language" => 'ja',
		"theme" => "modern",
		"skin" => "lightgray",
		"plugins" => [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
		],
		"toolbar" => "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	],
];
```

## WYSIWYG「TinyMCE」日本語化
TinyMCEの公式サイトから日本語データをダウンロード
https://www.tinymce.com/download/language-packages/
ダウンロードしたja.jsを vendor/js/tinymce/langs/ に追加

## WYSIWYG「TinyMCE」ファイル配置
``` bash
# php artisan vendor:publish
```

## WYSIWYG「TinyMCE」読み込みBladeファイル作成
``` bash
# vim resources/views/include/tinymce.blade.php
```
``` php
<script type="text/javascript" src="{{ config('tinymce.cdn') }}"></script>
<script type="text/javascript">
    @if(isset($els))
        @foreach($els as $el)
tinymce.init(
            {!! json_encode(config('tinymce.'.$el)) !!}
    );
    @endforeach
@else
tinymce.init(
            {!! json_encode(config('tinymce.default')) !!}
    );
    @endif
</script>
```

### 読み込みページのBladeファイルに追記する
下記の include を追記する。
``` php
@include('include.tinymce')
```