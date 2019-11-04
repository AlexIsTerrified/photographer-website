<html>
<?php include 'picloader.php';?>
<head>
	<link type="text/css" rel="stylesheet" href="foto.css">
</head>
<body class="topview">

	<?php 
		
		$name = null;
		$desc = null;
		$url = null;
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		/*	$aquery = "SELECT `url`,`Name`,`Description`, `ID` FROM `ig` WHERE id = {$id}";
			$arun = $conn ->query($aquery);
			
			$item = $arun->fetch_assoc();
			
			$name = $item['Name'];
			$desc  = $item['Description'];
			$url = $item['url']; */
			
			
		}
		
	?>
	<section class="imageview">
	<center>
	<?php
	if(isset($_GET['id'])){
	$low = (int)$id-1;
	$high = (int)$id+1;
	if($low<1){
		$low = (int)$a-1;
	}else if($high>=$a){
		$high = (string)1;
	}
	
	
	if($id%3==0){
		echo '<h2>'.$rn[$id].'</h2>
		<a href="./anotherpage.php?id='.$low.'"><div style="left:0;" class="navi-image"></div></a>
		<img src="'.$r[$id].'"></img>
		<a href="./anotherpage.php?id='.$high.'"><div style="right:0;" class="navi-image"></div></a>
		<p>'.$rd[$id].'</p>';
	}else if($id%2==0){
		echo '<h2>'.$ln[$id].'</h2>
		<a href="./anotherpage.php?id='.$low.'"><div style="left:0;" class="navi-image"></div></a>
		<img src="'.$l[$id].'"></img>
		<a href="./anotherpage.php?id='.$high.'"><div style="right:0;" class="navi-image"></div></a>
		<p>'.$ld[$id].'</p>
		';
	}else{
		echo '<h2>'.$cn[$id].'</h2>
		<a href="./anotherpage.php?id='.$low.'"><div style="left:0;" class="navi-image"></div></a>
		<img src="'.$c[$id].'"></img>
		<a href="./anotherpage.php?id='.$high.'"><div style="right:0;" class="navi-image"></div></a>
	<p>'.$cd[$id].'</p>';
	}
		
	}	?>
	
	</center>
	</section>
</body>