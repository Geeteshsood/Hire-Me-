<?php
include 'connection.php'; // Include your database connection script

$dis = "SELECT * FROM student";
$query = mysqli_query($con1, $dis);

while ($res = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $res['Name'] . "</td>";
    echo "<td>" . $res['Roll Number'] . "</td>";
    echo "<td>" . $res['Branch'] . "</td>";
    echo "<td>" . $res['Mobile Number'] . "</td>";
    echo "<td>" . $res['Email'] . "</td>";
    echo "<td>" . $res['CGPA'] . "</td>";
    echo "<td>" . $res['Class XII marks'] . "</td>";
    echo "<td>" . $res['Class X marks'] . "</td>";
    echo "<td><a href='edit_form.php?id=" . $res['ID'] . "'><button>Edit</button></a></td>"; // Edit button
    echo "</tr>";
}

echo "</table>";

?>
