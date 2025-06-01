<?php
class cnmoihttt
{
    private function connect()
    {
        $con=mysql_connect("localhost","thoai","123456");
        if(!$con)
        {
            echo 'Kết nối thất bại';
            exit();
        }
        else
        {
            mysql_select_db("cnmoi_sanpham");
            mysql_query("SET NAMES UTF8");
            return $con;
        }
    }
    public function xuathoadon($sql)
    {
        $link=$this->connect();
        $ketqua=mysql_query($sql,$link);
        $i=mysql_num_rows($ketqua);
        if($i>0)
        {
            $dulieu=array();
            while($row=mysql_fetch_array($ketqua))
            {
                $idhd=$row['idhd'];
                $idsp=$row['idsp'];
                $soluong=$row['soluong']; 
                $ngaymuahang=$row['ngaymuahang'];
                $tensp=$row['tensp'];
                $gia=$row['gia'];
                $dulieu[]=array('idhd'=>$idhd,'idsp'=>$idsp,'soluong'=>$soluong,'ngaymuahang'=>$ngaymuahang,'tensp'=>$tensp,'gia'=>$gia);
            }
            header("content-Type:application/json; charset=UTF-8");
            echo json_encode($dulieu);
        }
    }
    public function themxoasua($sql)
    {
        $link=$this->connect();
        if(mysql_query($sql,$link))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}
?>