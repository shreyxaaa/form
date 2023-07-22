<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // You can now use this data as per your requirements, such as saving it to a text file, database, or sending it via email.
}
?>
