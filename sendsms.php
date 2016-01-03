<?php 
class SendSms{

function sendmsg($phn,$msg){
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://www.siegsms.com/SendingSms.aspx?userid=demo5&pass=sieg4567&phone=$phn&msg=$msg&title=SIEGSM"); 
        //curl_setopt($ch, CURLOPT_URL, "http://www.siegsms.com/SendingSms.aspx?userid=demo&pass=demo@321&phone=$phn&msg=$msg&title=SIEGSM"); 
        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);
        return $output;
                    }   
}
?>