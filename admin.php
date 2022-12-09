<html>
<?php include 'picloader.php';?>
<head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link type="text/css" rel="stylesheet" href="./css/foto.css">
</head>
<body>
<section class="admin">
  <div class="photoup">
    <form action="" method="post" enctype="multipart/form-data">
    <b>
      <?php
      echo $pic_error;
      ?>
    </b>
      <input type="file" name='file' accept="image/x-png,image/gif,image/jpeg" required><br>
    <b>NAME</b><br>
    <input type="text" name="name" placeholder="Name" value=" " required><br>
    <b>DESCRIPTION</b><br>
    <input type="text" name="desc" placeholder="Description" id="desc" value=" " required><br>
    <input type="submit" value="submit" class="submit" required></form>
    </form>
    <div class="list">
      <?php

        while($d = $run->fetch_assoc()){
          echo '<div class="image"><img src="'.$d["Image"].'"/><div class="info"><span>'.$d["Name"].'</span><a href="?delete='.$d["ID"].'">Delete</a></div></div>';
        }

      ?>
    </div>
	</div>
  <div class="login">
    <div class="page">
      <span id="prompt">Enter password</span>
      <input type="password" id="password"/>
      <button id="login">Sign In</button>
    </div>
</div>
</section>
<script src="./javascript/admin.js" defer></script>
</body>
