<?php

require 'config.php';

class DB {

    public static $connection = NULL;

    public function __construct() {
        if (!self::$connection) {
            self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
    }

    public function querry($sql) {
        return mysqli_query(self::$connection, $sql);
    }

    public function select($sql) {
        $data = $this->querry($sql);
        $rows = array();
        while ($row = mysqli_fetch_array($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

}
