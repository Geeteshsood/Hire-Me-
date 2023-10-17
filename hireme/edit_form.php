<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Student Data</h2>
        <?php
        include 'connection.php'; // Include your database connection script

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch data for the selected ID
            $sql = "SELECT * FROM student WHERE ID = $id";
            $result = mysqli_query($con1, $sql);

            if ($row = mysqli_fetch_array($result)){
                ?>

                <form id="registration-form" action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?>"><br>

                    <label for="roll_number">Roll Number:</label>
                    <input type="text" id="roll_number" name="roll_number" value="<?php echo $row['Roll Number']; ?>"><br>

                    <label for="branch">Branch:</label>
                    <textarea id="branch" name="branch"><?php echo $row['Branch']; ?></textarea><br>

                    <label for="mobile_number">Mobile Number:</label>
                    <input type="text" id="mobile_number" name="mobile_number" value="<?php echo $row['Mobile Number']; ?>"><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>"><br>

                    <label for="cgpa">CGPA:</label>
                    <input type="text" step="0.01" id="cgpa" name="cgpa" value="<?php echo $row['CGPA']; ?>"><br>

                    <label for="class_xii_marks">Class XII Marks:</label>
                    <input type="text" id="class_xii_marks" name="class_xii_marks" value="<?php echo $row['Class XII marks']; ?>"><br>

                    <label for="class_x_marks">Class X Marks:</label>
                    <input type="text" id="class_x_marks" name="class_x_marks" value="<?php echo $row['Class X marks']; ?>"><br>

                    <button type="submit">Update</button>
                </form>

                <?php
            }
        }
        ?>
    </div>
</body>
</html>
