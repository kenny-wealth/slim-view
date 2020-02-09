<?php

namespace App\Application\Models;

use App\Application\Handlers\DbHandlerInterface;

abstract class BaseModel
{
    /** @var \PDO $connection */
    protected $dbHandler;

    abstract protected function getTableName();

    public function __construct(DbHandlerInterface $dbHandler)
    {
        $this->dbHandler = $dbHandler->getConnection();
    }

}
