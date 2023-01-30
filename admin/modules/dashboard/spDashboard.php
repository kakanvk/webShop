<?php

class spDashboard extends DB {
    
    public function countLoaiSP() {
        $sql = 'select * from types';
        $table = $this->select($sql);
        return count($table);
    }
    public function countNSX() {
        $sql = 'select * from brands';
        $table = $this->select($sql);
        return count($table);
    }
    public function countSanPham() {
        $sql = 'select * from products';
        $table = $this->select($sql);
        return count($table);
    }
    
    
    public function countTinTuc() {
        $sql = 'select * from news';
        $table = $this->select($sql);
        return count($table);
    }
    
    public function countTaiKhoan() {
        $sql = 'select * from accounts';
        $table = $this->select($sql);
        return count($table);
    }
    
    public function countGallery() {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        return count($table);
    }
}
