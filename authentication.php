<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = "";
$db_name = 'id21003775_movies';
$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$username = mysqli_real_escape_string($con, $username);
$loggedInUserID = isset($_SESSION['username']) ? $_SESSION['username'] : null;

$sql = "SELECT password FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Verify the entered password against the stored hash
    $hashedPassword = $row['password'];
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['username'] = $username;
        // Password is correct
        header("Location: http://localhost/movie_shack_nishi/index.php?username=" . urlencode($username));
        exit(); // exit after redirecting
    } else {
        // Password is incorrect
        echo "<h1>Login failed. Invalid username or password.</h1>";
    }
} else {
    // No matching username found in the database
    echo "<h1>Login failed. Invalid username or password.</h1>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Movie Shack</title>
    <link rel="stylesheet" href="./CSS/styles.css">
    <style>
        .size {
            columns: 200;
            font-size: 30px;
            width: 200px;
        }
    </style>
</head>

<body>

</body>

</html>