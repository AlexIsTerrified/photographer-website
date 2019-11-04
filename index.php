<html>
<?php include 'picloader.php';?>
<head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link type="text/css" rel="stylesheet" href="foto.css">
<Script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
<script type="text/javascript">
function tht(){
	$('.aboutpage').addClass('popon');
	$('.photogrid').removeClass('popon');
	$('.anotherpage').removeClass('popon');
	
	$('.n1').addClass('select-nav');
	$('.n2').removeClass('select-nav');
	$('.n3').removeClass('select-nav');
}
function tho(){
	$('.aboutpage').removeClass('popon');
	$('.photogrid').addClass('popon');
	$('.anotherpage').removeClass('popon');
	
	$('.n1').removeClass('select-nav');
	$('.n2').addClass('select-nav');
	$('.n3').removeClass('select-nav');
}
function thr(){
	$('.aboutpage').removeClass('popon');
	$('.photogrid').removeClass('popon');
	$('.anotherpage').addClass('popon');
	
	$('.n1').removeClass('select-nav');
	$('.n2').removeClass('select-nav');
	$('.n3').addClass('select-nav');
}
function apdisplay(){
	$('.anotherpage').addClass('apdisplay');
	$('body').addClass('noscroll');
}
function apoff(){
	$('.anotherpage').removeClass('apdisplay');
	$('body').removeClass('noscroll');
}
</script>
</head>
<body>
<canvas id="canvasbg"></canvas>
<script src="canvasbg.js"></script>
 <div class="center">
 <section class="profile">
	<div class="propic">
		<img></img>
	</div><br>
	<div class="cript">
	<h2>Lorem ipsum</h2>
	<div class="socialM">
		<a ><button class="social-nav" style="background-image:url('./img/fbicon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/twittericon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/igicon.png')"></button></a>
		<a ><button class="social-nav" style="background-image:url('./img/youtubeicon.png')"></button></a>
	</div>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget libero sit amet sapien cursus consectetur.
	Aliquam sit amet nunc elit. Morbi at dignissim dolor, in ultrices est. Nulla consectetur elit ac ipsum efficitur lacinia.</p>
	</div>
	 </section>
	<div class="navi">
		<a>
			<button class="nav-button n1" onclick="tht()" style="    background-image: url(./img/icon1.png);"></button>
		</a>
		<a>
			<button class="nav-button n2 select-nav" onclick="tho()" style="    background-image: url(./img/icon2.png);"></button>
		</a>
		<a>
			<button class="nav-button n3" onclick="thr()" style="    background-image: url(./img/icon3.png);"></button>
		</a>
	</div>
	<section class="aboutpage">
	</section>
	 <section class="photogrid popon">
    <div class="photo">
	<?php
	foreach($r as $a1=>$n1){
		if(!$a1==null)
		echo '<a onclick="apdisplay()" href="./anotherpage.php?id='.$a1.'" target="appage" title="'.$rn[$a1].'">
	<div>
	<img src="'.$n1.'" class="each"><img>
	</div>
	</a>';
	}
	?>
	</div>
	<div class="photo">
	<?php
	foreach($c as $a2=>$n1){
		if(!$a2==null)
		echo '<a onclick="apdisplay()" href="./anotherpage.php?id='.$a2.'" target="appage" title="'.$cn[$a2].'">
	<div>
	<img src="'.$n1.'" class="each"><img>
	</div>
	</a>';
	}
	?>
	</div>
	<div class="photo">
	<?php
	foreach($l as $a3=>$n1){
		if(!$a3==null)
		echo '<a onclick="apdisplay()" href="./anotherpage.php?id='.$a3.'" target="appage" title="'.$ln[$a3].'">
	<div>
	<img src="'.$n1.'" class="each"><img>
	</div>
	</a>';
	}
	?>
	</div>
 </section>
 </div>
 <section class="anotherpage">
	<nav class="apback">
		<a onclick="apoff()" href="./anotherpage.php?" target="appage"><div class="apback-icon"><div></div></div></a>
	</nav>
	<iframe name="appage"></iframe>
	</section>
</body>