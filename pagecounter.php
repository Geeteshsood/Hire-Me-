<?php

 $con = new mysqli("localhost" , "root" , "" , "facerate");

 $con->query("insert into pagecounter(test) values('1')");


 header("Location:facerate.php");


?>