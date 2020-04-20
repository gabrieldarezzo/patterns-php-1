<?php

namespace SON\Db\Builder;

use SON\Db\Builder\BuilderInterface;

interface DirectorInterface
{
    public function __construct(BuilderInterface $builder = null);
    public function getSqlAll() :string;
}
