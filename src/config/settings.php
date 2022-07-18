<?php

return [

    // These CSS rules will be applied after the regular template CSS

    /*
    'css' => [
    '.button-content .button { background: red }',
    ],
     */

    'colors' => [
        'highlight' => '#004ca3',
        'button'    => '#004cad',
        'logoText'  => '#ffffff',
    ],

    'view'   => [
        'senderName'  => null,
        'reminder'    => null,
        'unsubscribe' => null,
        'address'     => null,

        'logo'        => [
            'display' => false,
            'text'    => '',
            'path'    => '%PUBLIC%/vendor/beautymail/assets/images/sunny/logo.png',
            'width'   => '',
            'height'  => '',
        ],

        'twitter'     => null,
        'facebook'    => null,
        'flickr'      => null,
    ],

];