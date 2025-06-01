/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication11;
import java.net.HttpURLConnection;
import java.net.URL;
import java.nio.charset.Charset;
import org.apache.commons.io.IOUtils;
import org.json.JSONArray;
import org.json.JSONTokener;
import org.json.JSONObject;
/**
 *
 * @author TGDD
 */
public class clsapi {
    public JSONArray docapi()
    {
        try
        {
            String url="http://localhost:8080/ChauCongThoai_21009641_Thigk/ChauCongThoai_taoapi/xem.php";
            JSONArray arr=(JSONArray) new JSONTokener(IOUtils.toString(new URL(url).openStream(), Charset.forName("UTF-8"))).nextValue();
            return arr;
        }
        catch(Exception e)
        {
            System.out.println("Lỗi kết nối");
            return null;
        }
    }
    public void geturl(String url)
    {
        try
        {
            URL obj=new URL(url);
            HttpURLConnection con=(HttpURLConnection) obj.openConnection();
            con.setRequestMethod("GET");
            con.getResponseCode();
        }
        catch(Exception e)
        {
            
        }
    }
}
