
<?php
	require "db_connect.php";
	// include "header.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library management system</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="LMS.css" type="text/css">
</head>
<body>
     <div id="background">
       <div id="top">
            <a href="2122232425dd@gmail.com" class="fa fa-envelope" style="text-decoration:none;  color: white;">
                members@gmail.com
           </a>
           <a href="#" class="fa fa-phone" style="text-decoration:none; color: white;">
                +251 901887525
           </a>
           <a href="http://www.facebook.com/" class="fa fa-facebook" style="text-decoration:none; padding:7px; float:right; color: white;"></a>
           <a href="http://www.instagram.com/" class="fa fa-instagram" style="text-decoration:none; padding:7px; float:right; color: white;"></a>
           <a href="http://www.twitter.com/" class="fa fa-twitter" style="text-decoration:none;  padding: 7px ; float:right; color: white;"></a>
      </div>
    <div id="menu">
<div id="logo">LIBRARY MANAGEMENT <b style="color:#2c7ad6 ;">SYSTEM</b>
</div>
     <div id="menu1">
     <ul>
           <a href="#"><li class="fa fa-home">Home</li></a>
           <a href="member"><li class="fa fa-user">Member Login</li></a>
           <a href="librarian"><li class="fa fa-user">Librarian Login</li></a>
           <a href="index.php"><li class="fa fa-registered">Register</li></a>
           
     </ul>
</div>
</div>
<div id="slider">
       <div id="x">WELCOME TO LIBRARY<b style="color: #2c7ad6;">ZONE</b>
</div>
<div id="y">
<div id="l">
         <h1 style=" text-align: center; color: #2c7ad6;">MEMBER <br/>LOGIN</h1>
   <div id="student">
                          <!-- <form class="cd-form" method="post" action="member">  -->
                            <!-- USER NAME <br><input type="text" class="t" name="m_user"/><br>
                            PASSWORD <br><input type="password"class="t" name="m_pass"/><br> -->
      <br/><br/><br/><a href="member"><input type="submit" value="login"  name="m_login" style="border: 3px solid cyan;width: 103%; height: 30px; background-color: #2c7ad6;"></a>
     <!-- </form>  -->
</div>
</div>
</div>
<div id="z">
<div id="r">
        <h1 style=" text-align: center; color: white;">LIBRARIAN <br/>LOGIN</h1>
<div id="Teacher">
                       <!-- <form class="cd-form" method="post" action="librarian"> 
                        USER NAME <br><input type="text"class="t" name="l_user"/><br>
                        PASSWORD <br><input type="text"class="t" name="l_pass"/><br> -->

     <br/><br/><br/><a href="librarian"><input type="submit" value="login" name="l_login" style="border: 3px solid cyan;width: 103%; height: 30px; background-color: white;"></a>
     <!-- </form>  -->
</div>
</div>
</div>
</div>
<div id="down">
     <h3>Stay Connected</h3>
        <a href="http://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
        <a href="http://www.instagram.com" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
        <a href="http://www.twitter.com/" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
<h2>Contact Address</h2>
        <a href="#" class="fa fa-home" style="text-decoration: none; padding: 10px 12px;color: white; ">
                city : Debremarkos<br/>
                  place : Debremarkos university<br/>
        </a><br/>
        <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +2521 918203456
</a><br/>
       <a href="#" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              ahitafani833@gmail.com
</a>
</div>
<div class="footer">Developed By : GROUP 4 </div>
</div>
</body>
</html>

