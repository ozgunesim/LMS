<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
	<head>
	<title>ÖYS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script language="JavaScript" type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php

echo "Ders ID: " . $_GET['id'] . "<br>";
?>
<div class="well" id="ders_kutu">
	<div class="row">
		<div class="col-md-3">
		<img src="img/mat.png">
		</div>
		<div class="col-md-9" style="padding-left:10px;">
		<h3>Fen Bilimleri</h3><br>
		<h4>Uzay Dünya Gezengenler Cart Curt</h4><br>
		İlerleme Durumu:<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				%60
				</div>
			</div><br>
			<a style="float:right;" class="btn btn-primary btn-md dersEkrani_open" href="#" onclick="load(12);return false;" role="button">Derse Git</a>
		</div>
		
	</div>
</div>
</body>
</html>