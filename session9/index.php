<?php 
	session_start();
	include 'controller/frontend_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon"  href="dist/img/fb1.png">
<title>TVAT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<a href="index.php?action=home">HOMEPAGE</a> | 
    <a href="index.php?action=home&category_id=1">Apple</a>
  |	<a href="index.php?action=home&category_id=2">Samsung</a>
  |	<a href="index.php?action=home&category_id=3">Oppo</a>
  <a href="index.php?action=home&category_id=4">Xiaomi</a>
  <a href="index.php?action=home&category_id=5">Sony</a>
  <a href="index.php?action=home&category_id=6">Vivo</a>
	<?php 
      $controller = new FrontendController();
      $controller->handleRequest();
    ?>
</body>
</html>