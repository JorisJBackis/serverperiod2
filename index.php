<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>

<h2>Add a New Student</h2>

<form action="add_student.php" method="post">
    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br>
    
    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br>
    
    <label for="birthyear">Birth Year:</label><br>
    <input type="number" id="birthyear" name="birthyear" required><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
