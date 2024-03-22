<?php

function danhgia()
{
    $danhgia = listAll('id_danh_gia','tb_danh_gia');
    // var_dump($danhgia);
    require_once 'assets/admin/danhgia/danhgia.php';
}
