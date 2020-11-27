<?php
include 'header.php';
?>


<h1>FRONT page</h1>
<h3>Articles</h3>

<?php

$title=mysqli_real_escape_string($conn, $_GET['title']);
$date=mysqli_real_escape_string($conn, $_GET['date']);




$sql= "SELECT * FROM article WHERE a_title='$title' AND a_date='$date' ;";

$result=mysqli_query($conn,$sql);

$queryResult=mysqli_num_rows($result);

if ($queryResult > 0){

while($row=mysqli_fetch_assoc($result)){

echo "<div>

      <h3>".$row['a_title']."</h3>
      <h3>".$row['a_text']."</h3>
      <h3>".$row['a_date']."</h3>
      <h3>".$row['a_author']."</h3>

 </div>";




}
}
else{

echo"no found article";
}

?>










<?php
include 'footer.php'
?>