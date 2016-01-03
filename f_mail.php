<?php
ini_set("SMTP","smtp@gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'abhishek.sagar.work@gmail.com');

ob_start(); 
 include('include/class.phpmailer1.php');

if (isset($_POST['submit'])) 
{
 $name = ( isset($_REQUEST['name']) ) ? $_REQUEST['name'] : "";
 $email = ( isset($_REQUEST['email']) ) ? $_REQUEST['email'] : "";
 $telephone = ( isset($_REQUEST['telephone']) ) ? $_REQUEST['telephone'] : "";
 $comment = ( isset($_REQUEST['comment']) ) ? $_REQUEST['comment'] : "";
    $to="abhishek.sagar.work@gmail.com";
     $to="rajeevroshan19@gmail.com";  
    
        $body=" Hello Admin!";
        
        $body.="\r\n A Query has been received from :";
        $body.="\r\n :-Name ".$name.",";
         $body.="\r\n Sender Email:-".$email.",";
        $body.=" \r\n Sender Contact No:-".$telephone.",";
        $body.="\r\n SenderComment: ".$comment."";
         


    $header = $body. "\r\n";
   
      header('Content-Type: text/html; charset=utf-8');
  
   echo '<pre>'."$header".'</pre>';

$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 

 @mail($to,$body,$header);
   
     echo "File Sent Successfully.";
}
else{
    echo "sorry.couldn't send.....";
}
?>