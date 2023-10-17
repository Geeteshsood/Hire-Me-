<?php

include "connection.php";

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$cnt = "select * from registration where email = '$email' ";
$counter = mysqli_query($con,$cnt);
$email_count = mysqli_num_rows($counter);


// if($email_count > 0){
//     header("Location: ../hireme/edit_form.php");
// }
// else{
//    echo "no account exist";
// }

 include("../hireme/connection.php"); 


$var1 = "select id from student where email = '$email'";
$var2 = mysqli_query($con1,$var1);

if ($row = mysqli_fetch_assoc($var2)) {
        // Fetch the row as an associative array
        $id = $row['id'];
        header("Location: ../hireme/edit_form.php?id=$id");
}


?>
