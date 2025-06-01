<?php
include ("class/clscnmoi.php");
$p=new cnmoihttt();
$p->xuathoadon("select *
                from hoadon hd
                join sanpham sp on hd.idsp=sp.idsp
                order by hd.idhd desc");
?>