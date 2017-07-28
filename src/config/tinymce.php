<?php

return [

    // 'cdn' => $app->runningInConsole() ? config('app.url') : url('vendor/js/tinymce/tinymce.min.js'),
    'cdn' => config('app.url') . '/vendor/js/tinymce/tinymce.min.js',

    'default' => [
        "selector" => ".tinymce",
        "language" => 'en',
        "theme" => "modern",
        "skin" => "lightgray",
        "plugins" => [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        "toolbar" => "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
    ],

    // Custom

    /*'example' => [
        "selector" => "#example",
        "language" => 'pt_BR',
        "theme" => "modern",
        "skin" => "lightgray",
        "plugins" => [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
        ],
        "toolbar" => "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
    ],*/

];
