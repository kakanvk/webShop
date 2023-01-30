<?php

class spSua extends DB {

    public function result($id) {
        $sql = 'select * from brands where id_brand = '.$id;
        $rows = $this->select($sql);
        return $rows[0];
    }

}
