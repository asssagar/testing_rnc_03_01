<?php
//include('login.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">

<meta charset="utf-8">

<title>khanaman</title>


  <link rel="stylesheet" type="text/css" href="css/header_style.css">
  <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> -->
     

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<style type="text/css">
#nav
{
   list-style: none;
   padding: 5px;
   text-decoration: none; 

                 /* container */
}

    #nav > a
    {
        display: none;

    }
    #nav li
    {
        position: relative;

    display:inline-block;
    padding: 0px;
 
       
    }

    #nav li a{
       text-decoration: none;
       
        color: #fff;
    }
 
    /* first level */
 
    #nav > ul
    {
        height: 3.75em;
    }
        #nav > ul > li
        {
            width: 25%;
            height: 100%;
            float: left;
            text-decoration: none;
            margin-right: 10px;

            
        }
 
        #nav > li > ul > li{
      
        margin-top:1px;
        color: #777;
        width: 200px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 5px;
     

        }
  #nav > li > ul > li a{

             
        color: #000;
      

        }
         


    /* second level */
 
    #nav li>ul
    {
        display: none;
        position: absolute;
        top: 100%;
        background-color: #fff;
     right: 1px;
  border-right: 2px solid rgba(0, 0, 0, 0.2);
  border-left: 2px solid transparent;
        content: '';
          border-bottom: 2px solid #ccc;
            border-bottom-color: rgba(0, 0, 0, 0.2);

    }
  

    #nav ul li:hover {
        height: auto;
        padding: 10px;
    background-color: #f3767a;
   
  }
#nav ul li:hover a {
        height: auto;
        padding: 10px;
    background-color: #f3767a;
    color: #fff;
   
  }

        #nav li:hover ul
        {
            display: block;
            background-color: #fff;
            
        }


.drop_down{
  background-color:#f3767a;
  color: #fff;
  float: right;
  display: inline-block;
      margin-top: 8px;
    margin-right: 33px;
    border-radius: 5px;

}

/*not working in media screen....need to modify*/
@media only screen and (max-width: 640px)  {
 

#nav > a
    {
        display: none;

    }
 #nav li
    {
        position: relative;
        
    }
    #nav li>ul
    {
        display: none;
        position: absolute;
        top: 100%;
        background-color: #fff;
     right: 1px;
  border-right: 2px solid rgba(0, 0, 0, 0.2);
  border-left: 2px solid transparent;
        content: '';
          border-bottom: 2px solid #ccc;
            border-bottom-color: rgba(0, 0, 0, 0.2);

    }
    #nav li:hover ul
        {
            display: block;
            background-color: #fff;
            
        }

  #nav ul li:hover {
        height: auto;
        padding: 10px;
    background-color: #f3767a;
   
  }
#nav ul li:hover a {
        height: auto;
        padding: 10px;
    background-color: #f3767a;
    color: #fff;
   
  }
}

</style>
</head>
<body>
<div class="header">
<div class="logopic">
<img src="images/KM_logo_white_250.png">
</div>

<div class="drop_down">

<nav id="nav" role="navigation">


<li id="drpdwn">Welcome 
<?php
$login_user = $_SESSION['login_user'];

echo $login_user;
//echo $_SESSION['usr_id'];
?>


 &nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<i class="fa fa-chevron-circle-down" style="cursor: pointer;"></i>
<ul>
<li><a href="user_account.php"><b>My Account</Strong></b></li>
<li><a href="logout.php"><b>Log Out</b> </a></li>
</ul>
</li>

    
</nav>
</div>
</div>
</body>
</html>