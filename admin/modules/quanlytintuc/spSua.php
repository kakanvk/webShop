<?php

class spSua extends DB {

    function row_Tintuc($id) {
        $sql_Gallery = 'select * from news where id_new='.$id;
        return $this->select($sql_Gallery)[0];
    }

}

