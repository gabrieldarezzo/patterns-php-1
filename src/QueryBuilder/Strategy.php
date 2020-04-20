<?php

namespace SON\Db\QueryBuilder;


interface Strategy
{
    public function table(string $table) : Strategy;
    public function select($columns = '*') : Strategy;
    public function getQuery() : string;
}
