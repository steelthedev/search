<?php
include 'dbh.php';

if(isset($_POST['submit-search'])){

$search=mysqli_real_escape_string($conn,$_POST['search']);
if(empty($search)){

header("Location: index.php?workmen");
exit();
}

$sql="SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_date LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%';";
$result=mysqli_query($conn,$sql);
$queryResult=mysqli_num_rows($result);

if($queryResult > 0 ){
echo"you have ".$queryResult." result";
while($row=mysqli_fetch_assoc($result)){

echo "<a href='articles.php?title=".$row['a_title']." & date=".$row['a_date']."'><div>

      <h3>".$row['a_title']."</h3>
      <h3>".$row['a_text']."</h3>
      <h3>".$row['a_date']."</h3>
      <h3>".$row['a_author']."</h3>

 </div> </a>";



}




}else {

echo "No file ";

}


}

include 'footer.php';