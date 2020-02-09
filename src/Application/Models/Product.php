<?php

namespace App\Application\Models;

class Product extends BaseModel
{
    protected $tableName = 'product';

    protected function getTableName()
    {
        return $this->tableName;
    }

    public function find($keyword)
    {
        $query = $this->dbHandler->prepare(
            "SELECT * FROM $this->tableName WHERE product_name LIKE :keyword OR description LIKE :keyword"
        );
        $query->bindValue(":keyword", "%$keyword%");
        $query->execute();
        return $query->fetchAll();
    }

}
