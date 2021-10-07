<?php
namespace frontend\model;
use core\db;
use PDO;
class product
{
    public function getList()
    {
        $instance = db::getInstance();
        $conn = $instance->getConnection();
        $sql = 'SELECT * FROM products';
        return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}