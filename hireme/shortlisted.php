<?php

include "connection.php";

$cgpaThreshold = 7.0;

// Retrieve student data with CGPA > 7
$sql = "SELECT Name, Email FROM student WHERE CGPA > 7 and CGPA < 8";
$result = mysqli_query($con1, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['Name'];
        $email = $row['Email'];

        // Compose email subject and message
        $subject = "Congratulations, $name!";
        $message = "Dear $name,\n\nCongratulations on your high CGPA!";

        // Send the email
        $headers = "From: geeteshsood12@gmail.com"; // Replace with your email
        mail($email, $subject, $message, $headers);

        echo "Email sent to $name at $email<br>";
    }
} else {
    echo "No students found with CGPA greater than $cgpaThreshold.";
}

?>
