<?php
include 'conn.php';

if(isset($_POST['submit']))
{
    $id1 = $_POST['id'];
    $sql = "SELECT * FROM student where userid='$id1'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<div class='result'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='student-info'>
                    <p><strong>ID:</strong> " . $row["userid"]. "</p>
                    <p><strong>Name:</strong> " . $row["Name"]. "</p>
                    <p><strong>Semester:</strong> " . $row["semester"]. "</p>
                    <p><strong>Course:</strong> " . $row["Course"]. "</p>
                    <p><strong>Gender:</strong> " . $row["Gender"]. "</p>
                    <p><strong>Hobbies:</strong> " . $row["Hobbies"]. "</p>
                  </div>";
        }
        echo "</div>";
    } else {
        echo "<p class='no-result'>No results found for the given ID.</p>";
    }

    mysqli_close($conn);
}
else
{
?>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container {
            text-align: center;
        }

        input[type="textbox"] {
            padding: 8px;
            margin: 10px 0;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .student-info {
            background-color: #e0f7fa;
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .student-info p {
            margin: 5px 0;
        }

        .result {
            margin-top: 20px;
        }

        .no-result {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Student Information Lookup</h2>
        <form action="" method="post">
            <label for="id">Student ID:</label>
            <input type="textbox" name="id" id="id" required><br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </div>
</div>

</body>
</html>
<?php
}
?>
