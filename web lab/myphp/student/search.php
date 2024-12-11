<?php
include 'conn.php';



if (isset($_GET['studentid'])) {
    $studentid = $_GET['studentid'];

    // Fetch the existing data for the given student ID
    $sql = "SELECT * FROM student WHERE userid = '$studentid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);

        // Redirect to the update page with student data
        $query = http_build_query($student);
        header("Location: update2.php?$query");
        exit();
    } else {
        echo "No student found with ID: $studentid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Details</title>
</head>
<body>
    <h2>Retrieve Student Details</h2>
    <form method="GET" action="">
        <label for="studentid">Student ID:</label>
        <input type="text" name="studentid" id="studentid" required>
        <button type="submit">Retrieve</button>
    </form>
</body>
</html>
<?php

include 'conn.php';
$sql = "SELECT * FROM student WHERE Name='gokul'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<br> id:   " . $row["userid"]. " <br>Name:  " . $row["Name"]. "<br>semester:  " . $row["semester"]."<br>course: " . $row["course"]."<br>Gender:  ".$row["Gender"] ."<br>Hobbies:  ".$row["Hobbies"] ."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<html>
 <body>
    <center>
	<a href="homepage.php">< Back</a>
    </center>
 </body>
</html>
