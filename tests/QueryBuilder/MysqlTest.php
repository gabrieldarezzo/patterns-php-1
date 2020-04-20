<?php

namespace SON\Db\QueryBuilder;


class MysqlTest extends \PHPUnit_Framework_TestCase
{

    public function testSelectQuery()
    {
        $sql = new Mysql;
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM `users`;', $query);

    }

    public function testSelectQueryWithColumnsInTextFormat()
    {
        $sql = new Mysql;
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }

    public function testSelectQueryWithColumnsInArrayFormat()
    {
        $sql = new Mysql;
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }


    public function testSelectQueryWithTextJokerSpaced()
    {
        $sql = new Mysql;
        $query = $sql->table('users')
            ->select('* ')
            ->getQuery();

        $this->assertEquals('SELECT * FROM `users`;', $query);
    }
}
