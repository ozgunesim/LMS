<?php ob_start(); ?>
<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
	<head>
	<title>ÖYS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script language="JavaScript" type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.popupoverlay.js"></script>
	
	<style>
	.well
	{
		margin-left:2%;
		margin-right:2%;
	}
	
	.basliklar ul{padding-left:15px;display:block;list-style-type:binary !important;}
	.basliklar li{display:block !important;}
	.basliklar li:hover{background:#ddd;}
	

	
	/*
	.katBaslik a
	{
	display:inline; 
	border:1px solid; 
	margin-left:5px;
	color:#000;
	background:#eee;
	padding:3px;
	}
	
	*/
	</style>
	
<!-- tema: #D24D1D -->
		
	</head>
	
<body class="ana">
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navigasyon</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" style="position:relative;top:-2px;" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Anasayfa </a></li>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-tasks"></span> Sistem Yönetim Paneli </a></li>
		<!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Dersler <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Matematik</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-fire"></span> Fen Bilimleri</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-font"></span> Türkçe</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-globe"></span> Sosyal Bilgiler</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Hata Bildir</a></li>
          </ul>
        </li>
		-->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ara...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Git</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mesajlar <span class="badge">42</span></a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Özgün Eşim <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-flash"></span> Bilgiler</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ayarlar</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-off"></span> Çıkış</a></li>
          </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Yardım </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="content" style="padding-left:2%; padding-right:2%;">

	<div class="row">
	
		<div class="col-md-7">
			<div class="well" >
			<h3>Başlıklar</h3><hr>
			<!--<div class="input-group">
			  <input type="text" class="form-control">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="button">Ana Başlık Ekle</button>
			  </span>
			</div>
			-->
			
			<a href="basliklar/alt_ekle.php?ekle=0"><button class="btn btn-primary"> + Ana Başlık Ekle </button></a>
			
			<br><br>
			<?php
			require('basliklar/kategori.php');

			// LISTELEME YAPILIYOR
			kategori_listele(0,false);
			
			?>
			
				
			</div>
		</div>
		
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<div class="well">
					<h3>İçerik Ekle</h3><hr>
					<iframe name="icerik_frame" height="300" frameborder="0"></iframe>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="well">
					<h3>Üyelik</h3>
					</div>
				</div>
			</div>
		</div>
		
		
	
	</div>


	
</div>


</body>	

</html>
<?php ob_end_flush(); ?>