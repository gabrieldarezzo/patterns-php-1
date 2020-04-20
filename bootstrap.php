<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'dsn' => sprintf('mysql:host=%s;dbname=%s', '7.2.x-webserver-5.7-mysql', 'plugmanager'),
    'user' => 'root',
    'password' => 'tiger',
    //'options' => [],
];

SON\Db\DbSingleton::configure($config);

$builder = new SON\Db\Builder\MySqlBuilder;
$director = new App\Model\Sites($builder);
