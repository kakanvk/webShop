<?php

class spSua extends DB {

    function row_Taikhoan($id) {
        $sql_Gallery = 'select * from accounts where user_account = ' .$id;
        return $this->select($sql_Gallery)[0];
    }

}

