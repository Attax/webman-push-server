<?php declare(strict_types=1);

return [
    // push server 储存器
    'server-storage' => [
        'host'     => 'redis',
        'password' => '',
        'port'     => 6379,
        'database' => 0,
    ],
    // 服务通讯频道
    'server-channel' => [
        'host'     => 'redis',
        'password' => '',
        'port'     => 6379,
        'database' => 0,
        'options'  => []
    ]
];
