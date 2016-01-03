 <?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  
<style type="text/css">

html{
  width: 100%;
}
body{
width: 100%;
height: 100%;
}

.container{
width: 100%;
}
form.cform
{
width: 600px;
height: 520px;
margin: 0 auto; 

padding-top: 20px;
padding-bottom: 30px;

}

.head h1{

font-size: 36px;
text-align: center;
color: #c72f29;
font-family:Verdana, Geneva, sans-serif;
width: 100%;
padding-top: 50px;
}
#call{

margin:0 auto;

}
#call h2{
font-style: 'Open Sans', sans-serif;
  color: #c72f29;
  
   font-size:20px;
   font-weight:600;
}
.demo{
  text-align: center;

}
.demo h2{
  text-align: center;

}
#icon{
width: 40px;
height: 40px;      
float: left;   
}

.msg{

text-align: center;
font-size: 24px;
color: #c72f29;
font-weight: 900;
font-family: black 'Open Sans', sans-serif;
}
.sub_msg p{
color:#000;
font-weight:600;
text-align: center;
margin: 0 auto;
font-size: 18px;
}
label{
padding-left: 20px;
color: #000;
font-weight:600;
font:bold;
font-size:16px;
padding-right: 50px;
padding-bottom: 5px;
padding-top: 5px;
font-style: 'Open Sans', sans-serif;

}


.g-recaptcha{
width: 40%;
padding-left: 180px;
padding-top: 20px;
float: left;
z-index: 10;
}


.sec .last .addr{
color:#111;
font-size: inherit;
width: 100%;
height: 250px;
line-height: 36px;
font-family:Verdana,  sans-serif;
text-align: center;
font-weight: 400;
margin: 0 auto;
padding-top: 50px;
background-size: contain;
word-spacing: 6px;

}
.sec .last .map2{

width: 100%;
height: 300px;
 background-size: contain;
 background-image:url('images/map1.jpg'); 
  background-repeat: no-repeat; 
  
}

.focused{
  color:#c72f29;
  border:#c72f29 solid 3px;
}
textarea{
  color:#000;
  font-size: 12px;
  line-height: 22px;
  background-color: #FCE2E1;
  float: right;
  border: 3px solid rgba(0,0,0,0);
  border-radius: 10px;
  padding-left: 20px;
   width: 60%;
   margin-right: 35px;
    height: 150px;
    line-height: 150%;
    resize:vertical;
	font-color:#c72f29;
}
input {
  color:#FCE2E1;
  font-size: 12px;
  line-height: 22px;
  background-color: #FCE2E1;
  text-align:left;
  border: 2px solid rgba(0,0,0,0);
  border-radius: 10px;
  padding: 5px 5px 5px 56px;
  font-color:#c72f29;
  width: 50%;
}
form input[type="text"], form input[type="email"]
{
  padding-left: 20px;
  color:#000;
}

input:focus{
  background:#FCE2E1;
  box-shadow: 0;
  border: 2px solid #c72f29;
  color: #c72f29;
  outline: none;
padding: 5px 5px 5px 56px;
font-color:#c72f29;
}
.sub input#smt{

cursor:pointer; 
padding: 5px 8px 5px 8px;
background:#27ac60;
border:1px solid #33842a; 
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 10px;
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
color:white;
font-size:1.1em;
padding-right: 20px;
width: 13%;
margin-right: 32px;
float: right;
margin-top: 40px;
    
}


.sub input#smt:hover, .sub input#smt:focus{
background-color :#399630; 
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
padding-right: 20px;
}
.sec
{
  
    -webkit-column-count: 2; 
    -moz-column-count: 2; 
    column-count: 2;
    -webkit-column-gap: 50px; 
    -moz-column-gap: 50px; 
    column-gap: 50px;
    -webkit-column-rule: 0px ; 
    -moz-column-rule: 0px ; 
    column-rule: 0px ;
  height: inherit;
}
@media only screen and (min-width: 600px) and (max-width: 724px) {
form input[type="text"], form input[type="email"], form input[type="password"] {
    width: 60%;
  }
  }
/*
@media only screen and (min-width: 454px) and (max-width: 725px) {
.sec
{
  
    -webkit-column-count: 1; 
    -moz-column-count: 1; 
    column-count: 1;
    
  
}
form.cform
{
width: 600px;
height: 480px;
margin: 0 auto; 

padding-top: 20px;
padding-bottom: 30px;

}
.sec .last pre.addr{
color:#111;
font-size: 20px;
width: 400px;
height: 300px;
line-height: 28px;
font-family:Verdana,  sans-serif;
text-align: center;
font-weight: 400;
margin: 0 auto;
padding-top: 50px;

}
.sec .last .map2{
width: 100%;
height: 330px;
 background-size: contain;
 background-image:url('images/map1.jpg'); 
  background-repeat: no-repeat; 
   
}





}*/

@media only screen and (max-width: 700px) {

.g-recaptcha{
width: 40%;
padding-left: 20px;
padding-top: 20px;
float: left;
z-index: 10;
}
form input[type="text"], form input[type="email"]
{
  padding-left: 10px;
}


form.cform
{
width: 450px;
height: 480px;
margin: 0 auto; 

padding-top: 20px;
padding-bottom: 20px;

}
label{
padding-left: 7px;
color: #000;
font-weight:600;
font:bold;
font-size:16px;
padding-right: 0px;
padding-bottom: 5px;
padding-top: 5px;
font-style: 'Open Sans', sans-serif;

}
.sec .last .map2{
width: 75%;
height: 300px;
 background-size: contain;
 background-image:url('images/map1.jpg') no-repeat center; 
 margin: 0 auto;
}
.sec
{
  padding: 0px 0px 0px 0px;
    -webkit-column-count: 1; 
    -moz-column-count: 1; 
    column-count: 1;
    
  
}
.sec .last .addr{
color:#111;
width: 75%;
height: 200px;
line-height: 28px;
font-family:Verdana,  sans-serif;
text-align: center;
font-weight: 400;
margin: 0 auto;
padding-top: 20px;
word-spacing: 0px;

}

.head h1{

font-size: 28px;
text-align: center;
color: #c72f29;
font-family:Verdana, Geneva, sans-serif;
width: 100%;
padding-top: 30px;
}
#call{

margin:0 auto;

}
#call h2{
font-style: 'Open Sans', sans-serif;
  color: #c72f29;
  
   font-size:18px;
   font-weight:600;
}
.demo{
  text-align: center;

}
.demo h2{
  text-align: center;

}

.msg{

text-align: center;
font-size: 20px;
color: #c72f29;
font-weight: 900;
font-family: black 'Open Sans', sans-serif;
}
.sub_msg p{
color:#000;
font-weight:600;
text-align: center;
margin: 0 auto;
font-size: 16px;
}
input {
  color:#FCE2E1;
  font-size: 12px;
  line-height: 22px;
  background-color: #FCE2E1;
  border: 2px solid rgba(0,0,0,0);
  border-radius: 10px;
  padding: 5px 5px 5px 5px;
  font-color:#c72f29;
  width: 100%;
}
input:focus{
  background:#FCE2E1;
  box-shadow: 0;
  border: 2px solid #c72f29;
  color: #c72f29;
  outline: none;
padding: 5px 5px 5px 56px;
font-color:#c72f29;
display: inline-block;
}

.sub input#smt{

cursor:pointer; 
padding: 10px 75px; 
background:#27ac60;
border:1px solid #33842a; 
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
color:white;
font-size:1.1em;
width: 50%;
float:left;
margin-left: 55px;
margin-top: 10px;

}

/*.sub input#smt:hover, .sub input#smt:focus{
background-color :#399630; 
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
padding-right: 20px;
width: 70%;
}*/
textarea{
  color:#FCE2E1;
  font-size: 12px;
  line-height: 20px;
  background-color: #FCE2E1;
 
  border: 3px solid rgba(0,0,0,0);
  border-radius: 10px;
  padding-left: 20px;
   width: 68%;
  float: left;
  margin-left: 10px;
  margin-right: 20px; 
   margin-top: 10px;
    height: 150px;
    line-height: 150%;
    resize:vertical;

  font-color:#c72f29;
}
}
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer>
  
</script>
<!--
<script type="text/javascript"
   src="https://www.google.com/recaptcha/api/challenge?k=6LcsBBETAAAAALr32XBxpmKbEP0UhFMfhedsddnL">
 </script>
 <noscript>
   <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LcsBBETAAAAALr32XBxpmKbEP0UhFMfhedsddnL"
       height="300" width="500" frameborder="0"></iframe><br>
 </noscript>
-->

</head>


<body>


  <div class="container">
  
<div class="head">
    <h1>Contact Us</h1></div>

    <div id="call">
      
      <div class="demo">
      <img src="images/call.png" style="display:inline-block;">
      
      <h2 style="display:inline-block;">Call Helpline:</h2>
   
      <a href="#"><h2 style="display:inline-block;">+91-96311-87569</a></h2></div>
  </div>
    <br>
    <br>


    <div class="msg">
    <h2>Leave a Message</h2></div><br>
    <div class="sub_msg"><p>KhanaMan will come flying by!</p></div>

    <br>
    <br> 

<form class="cform" action="f_mail.php" method="POST">
    
    <label for="f_name">Name*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      
        <input name="name" type="text"  required/><br>
        <br>
    
        
      <label for="email">Email* </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
        <input name="email" type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required/><br>
      <!--   pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"-->
        <br>
           

      <label for="telephone">Contact No*</label>
      
        <input name="telephone" type="text" pattern="[789][0-9]{9}"  required /><br>
        <br>
    
      <p><label for="comment">Message*</label></p>&nbsp;
      
        <textarea name="comment"   /></textarea><br>
        
      <div class="g-recaptcha" data-sitekey="6LcsBBETAAAAALr32XBxpmKbEP0UhFMfhedsddnL"></div>


      <div class="sub">
      <input value="submit"  id="smt" type="submit" name="submit"></div><br>
<br>

    </div>
    </form>
<br>


    <!--section start-->
<div class="msg">Meet KhanaMan</div><br>
<hr style="width: 70%; color: rgba(206, 206, 206, 0.54); height: 1px;">
<br>

<div class="sec">
  <div class="last">
    <div class="addr">
      <pre>
<b style="font-weight:700;"> &nbsp;  Zura Technologies Pvt. Ltd.</b>
    A-2, Durga Apartments,
      Kilburn Colony, Hinoo,
        Ranchi-834002. 
      Jharkhand, India.
</pre>
    </div>
  
  <div class="map2">
    
  </div>
</div>



</div>
<br>
<br>
   <?php include('footer.php');?>
</body>
</html>