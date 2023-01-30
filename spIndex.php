<?php

class spSanphamHot extends DB {

    public function sanphamDetail($id) {
        $sql = 'select * from products where id_product = ' . $id;
        return $this->select($sql)[0];
    }

    public function spMoi() {
        $sql = 'select * from products order by id_product desc limit 0,3';
        return $this->select($sql);
    }

    public function spBanChay() {
        $sql = 'SELECT * FROM products ORDER BY sl_product DESC limit 0,1';
        return $this->select($sql);
    }

}


