<?php

namespace vendor\core\base;
use vendor\core\Db;

interface iModel
{
    public function __construct();
    public function query($sql);
    public function findAll();
}

abstract class Model implements iModel {

    protected $pdo;
    protected $table;

    public function __construct() {
        $this->pdo = Db::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

}
