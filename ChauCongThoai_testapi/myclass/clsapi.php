<?php
class docapi
{
    private function docjson($url)
    {
        $client=curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
        $response=curl_exec($client);
        $results=json_decode($response);
        return $results;
    }
    public function xuatdshd($url)
    {
        $results=$this->docjson($url);
        echo ' <table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                <td width="109" align="center" valign="middle"><strong>ID_HÓA ĐƠN</strong></td>
                    <td width="109" align="center" valign="middle"><strong>ID_SẢN PHẨM</strong></td>
                    <td width="154" align="center" valign="middle"><strong>SỐ LƯỢNG</strong></td>
                    <td width="208" align="center" valign="middle"><strong>NGÀY MUA HÀNG</strong></td>
                    <td width="157" align="center" valign="middle"><strong>TÊN SẢN PHẨM</strong></td>
                    <td width="160" align="center" valign="middle"><strong>GIÁ</strong></td>
                </tr>';
        $dem=1;
        foreach($results as $data)
        {
            echo '<tr>
                    <td align="center" valign="middle">'.$data->idhd.'</td>
                    <td align="center" valign="middle">'.$data->idsp.'</td>
                    <td align="center" valign="middle">'.$data->soluong.'</td>
                    <td align="center" valign="middle">'.$data->ngaymuahang.'</td>
                    <td align="center" valign="middle">'.$data->tensp.'</td>
                    <td align="center" valign="middle">'.$data->gia.'</td>
                </tr>';
            $dem++;
        }
        echo '</tbody>
                </table';
    }
}
?>