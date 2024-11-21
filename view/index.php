<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<form action="" method="post">
    <label for="username">User Name:</label>
    <input type="text" id="username" name="uname" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="pass" required>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    $uname = $_POST["uname"];
    if (empty($uname)) {
        echo "Please enter username.<br>";
        $isValid = false;
    } else {
        if (strlen($uname) < 6) {
            echo "Username must be at least 6 characters long.<br>";
            $isValid = false;
        } elseif (!ctype_alpha($uname)) { 
            echo "Username must contain only letters.<br>";
            $isValid = false;
        } else {
            echo "Username: $uname<br>";
        }
    }

    // Password validation
    $pass = $_POST["pass"];
    if (empty($pass)) {
        echo "Please enter password.<br>";
        $isValid = false;
    } else {
        if (strlen($pass) < 8) {
            echo "Password must be at least 8 characters long.<br>";
            $isValid = false;
        }
    }

    if ($isValid) {
        echo "Form submitted successfully!<br>";
    }
}
?>

</body>
</html>
