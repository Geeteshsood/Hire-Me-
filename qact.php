<?php 
error_reporting(0);
 $id = $_GET["id"];

 $c = $_POST["ankush"];

 session_start();
 
  $con=new mysqli("localhost","root","","hireme");

$result=$con->query("select *from round1 where id='$id' and correct='$c' ");

 if($r = $result->fetch_assoc() ){

   
   $_SESSION["score"]++;
       

 }


++$id;

 if($id==6) {
 
 	echo "Score : ".$_SESSION["score"];
 	
 	die();
 }


 header("Location:start.php?id=".$id);

?>