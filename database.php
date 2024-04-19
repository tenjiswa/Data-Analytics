<?php

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

//Database connection

$conn = new mysqli('localhost','root','','trying');

if($conn){
    $stmt =$conn->prepare("insert into datatest(fullname,cohort,age,gender,overall,mentorship,communication,inclusivity,development,workload,resources,tasks,feedback)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissssssssss",$fullname,$cohort,$age,$gender,$mentorship,$communication,$inclusivity,$development,$workload,$resources,$tasks,$feedback);
    $stmt->execute();
    echo "your response has been submitted thank you for your participation";
    $stmt->close();
    $conn->close();
    
}
else{
    die('Connection Failed : ', $conn->connect_error);

}
?>