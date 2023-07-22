<!DOCTYPE html>
<html>
<head>
    <title>User Details Form</title>
</head>
<body>
    <h1>User Details Form</h1>
    <form method="post" action="process_form.php">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
