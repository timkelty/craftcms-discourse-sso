<?php

return [
    'password' => getenv('MYSQL_PASSWORD'),
    'user' => getenv('MYSQL_USER'),
    'database' => getenv('MYSQL_DATABASE'),
    'tablePrefix' => getenv('DB_TABLE_PREFIX'),
    'driver' => getenv('DB_DRIVER'),
    'port' => getenv('DB_PORT'),
    'schema' => getenv('DB_SCHEMA'),
    'server' => getenv('DB_SERVER'),
];
