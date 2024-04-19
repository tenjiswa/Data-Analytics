<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trying";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname=$_POST['fullname'];
$cohort=$_POST['cohort'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$overall=$_POST['overall'];
$mentorship=$_POST['mentorship'];
$communication=$_POST['communication'];
$inclusivity=$_POST['inclusivity'];
$development=$_POST['development'];
$workload=$_POST['workload'];
$resources=$_POST['resources'];
$tasks=$_POST['tasks'];
$feedback=$_POST['feedback'];

// SQL query to insert data into the database
$sql = "INSERT INTO datatest (fullname,cohort,age,gender,overall,mentorship,communication,inclusivity,development,workload,resources,tasks,feedback) VALUES ('$fullname','$cohort','$age','$gender','$mentorship','$communication','$inclusivity','$development','$workload','$resources','$tasks','$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>