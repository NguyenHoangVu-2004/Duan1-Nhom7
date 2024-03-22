<?php
function getAlldanhgia(){
    try {
        $sql = 'SELECT * FROM tb_danh_gia';

        $stmt = $GLOBALS['conn']->prepare($sql);


        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
?>