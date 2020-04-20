<?php

namespace SON\Db;

class DbSingleton
{
    protected static $instance;
    protected static $config;

    protected function __construct(){}
    protected function __clone(){}
    protected function __wakeup(){}


    public static function configure(array $config)
    {
        self::$config = $config;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            $dsn = self::$config['dsn'] ?? '';
            $user = self::$config['user'] ?? '';
            $password = self::$config['password'] ?? '';
            $options = self::$config['options'] ?? [];

            //var_dump($dsn);

            $pdo = new \PDO($dsn, $user, $password, $options);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);


            self::$instance = new Db($pdo);
        }
        return self::$instance;

    }



}
