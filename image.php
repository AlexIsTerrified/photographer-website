<?php
     $host = 'localhost';
     $user = 'root';
     $pass = '';
     $conn = new mysqli($host, $user, $pass,'photos');
    
     $query = 'SELECT `Image`,`Name`,`Description`, `ID` FROM `pics` WHERE ID = '.$_GET["id"];
     $run = $conn ->query($query);    
     while($d = $run->fetch_assoc()){
        $item = $d;
     }
?>
<html>
<head>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="./css/foto.css">
</head>
<body>
    <canvas id="canvasbg"></canvas>
    <script src="canvasbg.js"></script>
    <div class="nav">
        <div class="left">
            <a href="./">Back</a>
        </div>
    </div>
    <div class="center">
        <div class="imagepage">
            <img src="<?php echo $item["Image"] ?>"/>
            <div class="info">
                <h2><?php echo $item["Name"] ?></h2>
                <p><?php echo $item["Description"] ?></p>
            </div>
        </div>
    </dov>
</body>
</html>