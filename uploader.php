<html>
<?php include 'picloader.php';?>
<head>
<link type="text/css" rel="stylesheet" href="foto.css">
</head>
<body>
<section class="uppage">
    <div class="photoup">
	 <header><b>
  <?php
   echo $pic_error;
  ?></b>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name='file' accept="image/x-png,image/gif,image/jpeg" required="required"><br>
	<b>NAME</b><br>
	<input type="text" name="name" placeholder="Name" value=" "><br>
	<b>DESCRIPTION</b><br>
	<input type="text" name="desc" placeholder="Description" id="desc" value=" "><br>
	<input type="submit" value="submit" class="submit"></form>
  </form>
 </header>
	</div>
</section>
</body>
