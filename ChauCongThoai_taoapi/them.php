<?php
include ("class/clscnmoi.php");
$p=new cnmoihttt();

$soluong=$_REQUEST['soluong'];
$ngaymuahang=$_REQUEST['ngaymuahang'];
$idsp=$_REQUEST['idsp'];

if($soluong!='' && $ngaymuahang!='' && $idsp!='')
{
    $p->themxoasua("INSERT INTO hoadon(soluong,ngaymuahang,idsp)VALUES('$soluong','$ngaymuahang','$idsp')");
}
?>