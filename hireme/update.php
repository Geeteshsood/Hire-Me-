<?php
// Database connection settings
include 'connection.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
    $name = $_POST["name"];
    $roll_number = $_POST["roll_number"];
    $branch = $_POST["branch"];
    $mobile_number = $_POST["mobile_number"];
    $email = $_POST["email"];
    $cgpa = $_POST["cgpa"];
    $class_xii_marks = $_POST["class_xii_marks"];
    $class_x_marks = $_POST["class_x_marks"];

    $sql = "UPDATE `student` SET
        `Name`='$name',
        `Roll Number`='$roll_number',
        `Branch`='$branch',
        `Mobile Number`='$mobile_number',
        `Email`='$email',
        `CGPA`='$cgpa',
        `Class XII marks`='$class_xii_marks',
        `Class X marks`='$class_x_marks'
        WHERE `ID`='$id'";

    $res = mysqli_query($con1,$sql);

     if ($res) {
    echo '<div style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; margin: 10px 0; text-align: center;">Data Updated successfully</div>';
    } else {
        echo '<div style="background-color: #FF5733; color: white; padding: 10px 20px; border-radius: 5px; margin:10px 0; text-align: center;">Error: ' . mysqli_error($con) . '</div>';
    }
}
  
?>
