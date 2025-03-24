<?php
include('config.php');

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (!isset($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"])) {
        die("Error: All fields are required.");
    }

    // Sanitize inputs (though prepared statements handle most of this)
    $name = trim(strip_tags($_POST["name"]));
    $email = trim(strip_tags($_POST["email"]));
    $phone = trim(strip_tags($_POST["phone"]));
    $message = trim(strip_tags($_POST["message"]));

    $stmt = $con->prepare("INSERT INTO landing_registration (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

mysqli_close($con);
?>
