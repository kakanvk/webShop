<?php

class spThem extends DB {
    
    public function table_Loai() {
        $sql = 'select * from types';
        return $this->select($sql);
    }
    
    public function table_NSX() {
        $sql = 'select * from brands';
        return $this->select($sql);
    }

}

