<?php 
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = new mysqli($host, $user, $pass,'photos');


function resizeImage($resource, $width,$height){
	if($width > 3000 || $height > 3000){
		$nWidth = $width/4;
		$nHeight = $height/4;
	}else if($width > 1800 || $height > 1800){
		$nWidth = $width/3;
		$nHeight = $height/3;
	}else if($width > 1200 || $height > 1200){
		$nWidth = $width/2;
		$nHeight = $height/2;
	}else if($height > 900){
		$nWidth = $width/1.5;
		$nHeight = $height/1.5;
	}else{
		$nWidth = $width;
		$nHeight = $height;
	}
	
	$imageLayer = Imagecreatetruecolor($nWidth,$nHeight);
	imagecopyresampled($imageLayer,$resource,0,0,0,0,$nWidth,$nHeight,$width,$height);
	return $imageLayer;
}
 $pic_error = 'choose an image';
  if(isset($_FILES['file']['name'])){
 $pic = $_FILES['file']['name'];
 $pic_type = $_FILES['file']['type'];
 $pic_temp = $_FILES['file']['tmp_name'];
 $pic_size = $_FILES['file']['size'];
 $pic_ext = pathinfo($pic, PATHINFO_EXTENSION);
 $sourceprop = getimagesize($pic_temp);
 $imagewidth = $sourceprop[0];
 $imageheight = $sourceprop[1];
 $imagetype = $sourceprop[2];
 $pic_desc = '';
 if(isset($_POST['name'])  && !$_POST['name']==" "){$pic = $_POST['name'];}
  if(isset($_POST['desc']) && !$_POST['desc']==" "){$pic_desc = $_POST['desc'];}
	 if(!empty($pic)){
		 if($pic_size<=8000000 && preg_match("/\.(jpg|jpeg|png|gif)$/i",$_FILES['file']['name']) && !file_exists ('./img/'.$pic.'.jpg')){
		 switch($imagetype){
			 case IMAGETYPE_JPEG:
				$resourcetype = imagecreatefromjpeg($pic_temp);
				$imagelayer = resizeImage($resourcetype,$imagewidth,$imageheight);
				if(imagejpeg($imagelayer,'./img/'.time().'.'.$pic_ext))$pic_error='uploaded';
				$picName = $_POST['name'];
				$pic_desc = $_POST['desc'];
				$add = "INSERT INTO `ig` (`ID`, `Name`, `url`, `Description`) VALUES (NULL, '".$picName."', './img/".time()."'.'".$pic_ext."', '".$pic_desc."');";
				$conn ->query($add);
				$_FILE=array();
				$_POST = array();
				break;
			case IMAGETYPE_PNG:
				$resourcetype = imagecreatefrompng($pic_temp);
				$imagelayer = resizeImage($resourcetype,$imagewidth,$imageheight);
				if(imagepng($imagelayer,'./img/'.time().'.'.$pic_ext))$pic_error='uploaded';
				$picName = $_POST['name'];
				$pic_desc = $_POST['desc'];
				$add = "INSERT INTO `ig` (`ID`, `Name`, `url`, `Description`) VALUES (NULL, '".$picName."', './img/".time()."'.'".$pic_ext."', '".$pic_desc."');";
				$conn ->query($add);
				$_FILE=array();
				$_POST = array();
				break;
			case IMAGETYPE_GIF:
				$resourcetype = imagecreatefromgif($pic_temp);
				$imagelayer = resizeImage($resourcetype,$imagewidth,$imageheight);
				if(imagegif($imagelayer,'./img/'.time().'.'.$pic_ext))$pic_error='uploaded';
				$picName = $_POST['name'];
				$pic_desc = $_POST['desc'];
				$add = "INSERT INTO `ig` (`ID`, `Name`, `url`, `Description`) VALUES (NULL, '".$picName."', './img/".time()."'.'".$pic_ext."', '".$pic_desc."');";
				$conn ->query($add);
				$_FILE=array();
				$_POST = array();
				break;
			default:
			break;
		 }
		 }else{$pic_error = 'File size must be less than 8MB and an image.';}
	 }
 }
 $query = 'SELECT `url`,`Name`,`Description`, `ID` FROM `ig` order by id desc ';
 $run = $conn ->query($query);
	$r[] = null; 
	$c[] = null;
	$l[] = null;
	$rn[] = null; 
	$cn[] = null;
	$ln[] = null;
	$rd[] = null; 
	$cd[] = null;
	$ld[] = null;
	$ri[] = null; 
	$ci[] = null;
	$li[] = null;
    $a = 1;	
	while($d = $run->fetch_assoc()){	
	 if($a%3==0){
		 $r[$a] = $d['url'];
		 $ri[$a] = $d['ID'];
		 $rn[$a] = $d['Name'];
		 $rd[$a] = $d['Description'];
	 }else if($a%2==0){
		 $l[$a] = $d['url'];
		 $li[$a] = $d['ID'];
		 $ln[$a] = $d['Name'];
		 $ld[$a] = $d['Description'];
	 }else {
		 $c[$a] = $d['url'];
		 $ci[$a] = $d['ID'];
		 $cn[$a] = $d['Name'];
		 $cd[$a] = $d['Description'];
	 }$a=$a+1;
	}
?>