<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['Vibha'];
    $last_name = $_POST['Shreeshail B V'];
    $email = $_POST['vibha@gmail.com'];
    $phone = $_POST['6362848134'];
    $address = $_POST['Chitradurga'];
    $gender = $_POST['Female'];

    // Display the submitted data
    echo "<h1>Registration Successful</h1>";
    echo "<p><strong>First Name:</strong> " . htmlspecialchars($first_name) . "</p>";
    echo "<p><strong>Last Name:</strong> " . htmlspecialchars($last_name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</p>";
    echo "<p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
}
?>
