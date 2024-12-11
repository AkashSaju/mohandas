<?php
session_start(); 


$validUsername = "admin";
$validPassword = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        // Store user info in session
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        // Redirect to a protected page
        header("Location: homepage.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Login</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
homepage.php
<html>
	<body>
	<center>
	<a href="login.php">Home</a><br>
	<a href="insertion.php">Add Student details</a><br>
	<a href="viewall.php">View All Students</a><br>
	<a href="search.php">Search a Student with a Student Id</a><br>

	<a href="delete.php">Delete a Student </a><br>
	<a href="update1.php">Update Student details</a><br>
	<a href="logout.php">Logout</a><br>
	</center>
	</body>
</html>
