<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Optionally store the data in a database or send an email

    // Display the form data
    echo "<h1>Registration Successful!</h1>";
    echo "<p>Thank you for registering, $name.</p>";
    echo "<p>Your email: $email</p>";
    echo "<p>Your phone number: $phone</p>";
    echo "<p>Your address: $address</p>";
}
?>
