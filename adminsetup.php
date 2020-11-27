<?php
include 'dbh.php';

if(isset($_POST["submit-post"])){

$a_title=$_POST['a_title'];
$a_text=$_POST['a_text'];
$a_date=$_POST['a_date'];
$a_author=$_POST['a_author'];


$sql="INSERT INTO article (a_title,a_text,a_date,a_author) VALUES(?, ?, ?, ? );";
 
$stmt=mysqli_stmt_init($conn);

if(mysqli_stmt_prepare($stmt,$sql)){


mysqli_stmt_bind_param($stmt, "ssss", $a_title, $a_text, $a_date, $a_author);

mysqli_stmt_execute($stmt);

header("Location: admin.php?Good");

}

else{
header("Location: admin.php?d");


}



}

else{

header("Location: admin.php");

}