<?php

namespace SON\Db\Builder;

use SON\Db\QueryBuilder\Mysql;


class MySqlBuilder implements BuilderInterface
{

    protected $query;

    public function __construct()
    {
        $this->query = new Mysql;
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
    }

    public function getSqlAll() :string
    {
        return $this->query
            ->select()
            ->getQuery();
    }





}
