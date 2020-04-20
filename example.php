<?php

require __DIR__ . '/vendor/autoload.php';

/*
$builder = new SON\Db\Builder\SqlBuilder;
$userDirector = new SON\Db\Builder\UsersDirector($builder);

$sql = $userDirector->getSqlAll();
var_dump($sql);
*/

/*
$builder = new SON\Db\Builder\SqlBuilder;

$banks = new App\Model\Banks($builder);

$sql = $banks->getSqlAll();
var_dump($sql);
*/


$builder = new SON\Db\Builder\MySqlBuilder;
$director = new App\Model\Sites($builder);

/*
// $builder = new SON\Db\Builder\SqlBuilder;
// $director = new SON\Db\Builder\UsersDirector($builder);

$pdo = new \PDO('mysql:host=7.2.x-webserver-5.7-mysql;dbname=plugmanager', 'root', 'tiger');
$db = new SON\Db\Db($pdo);
$db->setDirector($director);

$data = $db->getAll()
    ->execute();

*/

$config = [
    'dsn' => sprintf('mysql:host=%s;dbname=%s', '7.2.x-webserver-5.7-mysql', 'plugmanager'),
    'user' => 'root',
    'password' => 'tiger',
    //'options' => [],
];

SON\Db\DbSingleton::configure($config);

$db = SON\Db\DbSingleton::getInstance();
$db->setDirector($director);

$data = $db->getAll()
    ->execute();
var_dump($data->fetchAll());
