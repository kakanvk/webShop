<?php

class spSua extends DB {

    public function row_Loai($id) {
        $sql_sp = 'select * from types where id_type = '.$id;
        return $this->select($sql_sp)[0];
    }

}