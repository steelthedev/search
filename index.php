<?php
include 'header.php';
?>

<div class="container mt-5 ">
<div class="row mt-5 ">
<div class="col-md-12 mt-5">
<h1>FRONT page</h1>
<h3>Articles</h3>

<form action="search.php" method="POST">
<div class="form-group">
<input type="text"name="search" class="form-control" placeholder="search">
</div>
<button type="submit"class="btn-lg btn"name="submit-search">Search</button>

<?php

$sql= "SELECT * FROM article;";

$result=mysqli_query($conn,$sql);

$queryResult=mysqli_num_rows($result);

if ($queryResult > 0){

while($row=mysqli_fetch_assoc($result)){

echo "
<section class='post'>
<div class='row '>
<div class='mt-5 col-md-6'>

      <h3>".$row['a_title']."</h3>
      <h3>".$row['a_text']."</h3>
      <h3>".$row['a_date']."</h3>
      <h3>".$row['a_author']."</h3>
</div>
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

