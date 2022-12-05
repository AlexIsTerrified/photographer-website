<html>
<?php include 'picloader.php';?>
<head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link type="text/css" rel="stylesheet" href="./css/foto.css">
<script>
	imageList = [
		<?php
		while($d = $run->fetch_assoc()){
				echo '{Name:"'.$d["Name"].'",Description:"'.$d["Description"].'",Image:"'.$d["Image"].'",ID:"'.$d['ID'].'"},';

		}
		?>
	]
</script>
</head>
<body>
<canvas id="canvasbg"></canvas>
<script src="canvasbg.js"></script>
<div class="nav">
        <div class="right">
            <a href="./admin.php">Admin</a>
        </div>
</div>
 <div class="center">
 <section class="profile">
	<div class="propic">
		<img src="./img/propic.jpg"></img>
	</div><br>
	<div class="cript">
	<h2>Photographey Portfolio</h2>
	<div class="socialM">
		<a ><button class="social-nav" style="background-image:url('./img/fbicon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/twittericon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/igicon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/youtubeicon.png')"></button></a>
	</div>
	<p>Pretend this is a short bio of a real person. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget libero sit amet sapien cursus consectetur.
	Aliquam sit amet nunc elit. Morbi at dignissim dolor, in ultrices est. Nulla consectetur elit ac ipsum efficitur lacinia.</p>
	</div>
	 </section class="content">
	 <section class="photogrid" id="grid">
	 </section>
 </div>
	<script src="./javascript/main.js" defer></script>
	<script>
		

	</script>
</body>