<?php

class spSua extends DB {

    public function row_SanPham($id) {
        $sql = 'select * from products where id_product=' . $id;
        return $this->select($sql)[0];
    }
    
    public function rows_Loai() {
        $sql = 'select * from types';
        return $this->select($sql);
    }
    
    public function rows_NSX() {
        $sql = 'select * from brands';
        return $this->select($sql);
    }

}
