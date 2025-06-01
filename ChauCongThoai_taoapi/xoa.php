<?php
include ("class/clscnmoi.php");
$p=new cnmoihttt();

$idxoa=$_REQUEST['idhd'];

if($idxoa>0)
{
    $p->themxoasua("delete from hoadon where idhd='$idxoa' limit 1");
}
?>