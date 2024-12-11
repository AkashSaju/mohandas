<!DOCTYPE html>
<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cno=$_POST['phone'];
	$email=$_POST['email'];
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "INSERT INTO userregistertion(firstname,lastname,mobilenumber,email,username,password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";

	if (mysqli_query($conn, $sql)) {
  		echo "New record created successfully";
		} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	mysqli_close($conn);
}
else
{
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 5px;
           
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding-left: 0px;
        }
        button {
            background-color: #e3c062;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Register Now</h2>
        <form action="" method="post">
            <label for="firstname">FirstName:</label>
            <input type="text" id="firstname" name="firstname" required>
         
            <label for="lastname">lastName:</label>
            <input type="text" id="lastname" name="lastname" required>


            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required placeholder="e.g.,00000000">

            <label for="email">email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>
</html>
<?php
}
?>