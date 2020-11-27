<?php
include 'header.php';
?>

<h2>HI Mr Admin</h2>
<p>Add be articles</p>
<section class="post">
<div class="container ">
<div class="row ">
<div class="mt-5 col-md-8">
<form action="adminsetup.php" method="POST">
<div class="form-group">
<input type="text" name="a_title" class="form-control"placeholder="article title">
</div>
<div class="form-group">
<textarea type="text" name="a_text" class="form-control" placeholder="article text"rows="5"></textarea>
</div>
<div class="form-group">
<input type="text" name="a_date"class="form-control"  placeholder="article date">
</div>
<div class="form-group">
<input type="text" name="a_author" class="form-control "placeholder="article author">
</div>
<button type="submit" name="submit-post">POST</button>





</form>
</div>
</div>
</div>
</section>

<?php
include 'footer.php';
?>