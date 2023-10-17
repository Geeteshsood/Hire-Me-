<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
    <h2>Student Data</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Branch</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>CGPA</th>
            <th>Class XII marks</th>
            <th>Class X marks</th>
        </tr>
        <?php include("fetch_data.php"); ?>
    </table>
</body>
</html>
