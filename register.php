<?php
$n=$_POST["name"];
$r=$_POST["rollno"];
$e=$_POST["email"];
$c=$_POST["cgpa"];
$con=new mysqli("localhost","root","","hireme");
$con->query("insert into info(name,rollno,email,cgpa) values('$n','$r','$e','$c')");
 
 session_start();  

 $_SESSION["score"] = 0;
 header("Location:start.php");

?>