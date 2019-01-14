<?php 
	session_start();
	include 'controller/frontend_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo/proxy_form.png">
<title>TVAT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/detail.css">
<link rel="stylesheet" type="text/css" href="css/list_news.css">
<link rel="stylesheet" type="text/css" href="css/megamenu.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
<div class="header-bottom">
  <div class="wrap">
    <ul class="megamenu skyblue">
        <li><a class="color1" href="index.php?action=home">Home</a></li>
        <li><a class="color2" href="index.php?action=category&id=1">Premier League</a></li>
        <li><a class="color3" href="index.php?action=category&id=2">Bundesliga</a></li>
        <li><a class="color4" href="index.php?action=category&id=3">Laliga</a></li>
        <li><a class="color5" href="index.php?action=category&id=4">Seria</a></li>
        <li><a class="color4" href="index.php?action=category&id=5">V-league</a></li>
        <li><a class="color7" href="index.php?action=category&id=6">League-1</a></li>
        <li><a class="color5" href="index.php?action=category&id=7">Champion League</a></li>
        <li><a class="color5" href="index.php?action=nation">Thông Tin Cầu Thủ</a></li>
        <li><a class="color1" href="index.php?action=video">Video</a></li>  
    </ul>
  </div>
 </div> 
	<?php 
      $controller = new FrontendController();
      $controller->handleRequest();
    ?>
    
</body>
</html>