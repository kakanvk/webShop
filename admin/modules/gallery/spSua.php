<?php

class spSua extends DB {

    public function table_SP() {
        $sql_sp = 'select * from products';
        return $this->querry($sql_sp);
    }

}
