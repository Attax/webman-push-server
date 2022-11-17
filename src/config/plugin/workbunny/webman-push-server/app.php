<?php

return [
    'enable'        => true,
    'host'          => 'websocket://0.0.0.0:3131',
    'auth_url'      => 'http://127.0.0.1:8787/plugin/workbunny/webman-push/auth',
    'redis_channel' => 'default',

    'apps' => [
        'APP_KEY_TO_REPLACE' => [
            'app_id'     => 'APP_ID_TO_REPLACE',
            'app_key'    => 'APP_KEY_TO_REPLACE',
            'app_secret' => 'APP_SECRET_TO_REPLACE',
        ]
    ]
];