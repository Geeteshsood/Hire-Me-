<?php

include "connection.php";

$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$cnt = "select * from registration where email = '$email' ";
$counter = mysqli_query($con,$cnt);
$email_count = mysqli_num_rows($counter);

if($email_count > 0){
    echo "already logged in , go back to home page.";
}
else{
// Insert data into the database
$sql = "INSERT INTO `registration`(`Name`, `Roll Number`, `Email`, `Password`) VALUES ('$name','$roll_number','$email','$password')";

$result = mysqli_query($con,$sql);

if($result){
    // echo "signed successfully";
    header("Location: ../hireme/mainpage.php");
}

}

?>
