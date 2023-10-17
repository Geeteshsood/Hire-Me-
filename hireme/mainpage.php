<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Registration Form</h2>
        <form id="registration-form" action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" ><br>

            <label for="roll_number">Roll Number:</label>
            <input type="text" id="roll_number" name="roll_number" ><br>

            <label for="branch">Branch:</label>
            <textarea id="branch" name="branch" ></textarea><br>

            <label for="mobile_number">Mobile Number:</label>
            <input type="text" id="mobile_number" name="mobile_number" ><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" ><br>

            <label for="cgpa">CGPA:</label>
            <input type="text" step="0.01" id="cgpa" name="cgpa" ><br>

            <label for="class_xii_marks">Class XII Marks:</label>
            <input type="text" id="class_xii_marks" name="class_xii_marks" ><br>

            <label for="class_x_marks">Class X Marks:</label>
            <input type="text" id="class_x_marks" name="class_x_marks" ><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
