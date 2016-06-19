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
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Ünite: Uzay Gezengen Cart Curt</a></li>
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

	
	
	<div class="row" style="display:none;">
        <div class="col-md-12"><div class="alert alert-info" role="alert"><p><h1 ><span class="glyphicon glyphicon-bullhorn"></span> Duyuruuuuu</h1></p></div></div>
    </div>

	<div class="row" id="ilk_giris">
			<div class="well alert-alert-error" id="ust_bildirim">
			<h1>Merhaba Özgün!</h1>
			<p>Sisteme ilk kez giriş yaptığını görüyoruz. Sana bir tanıtım dökümanı hazırladık. Bakmak ister misin?</p>
			<p><a class="btn btn-primary btn-md" href="#" role="button">Evet, isterim.</a>
			<a class="btn btn-danger btn-md" style="color:#000; background-color:#fff;" id="ilk_kapat">Hayır, belki sonra.</a></p>
			</div>
	</div>
	
	<!-- mobil konular -->
	<div class="row">
		<div class="well hidden-lg">Mobil Konular<//div>
	</div>
	
	
	<div class="row">
	
	<div class="col-md-3 visible-lg" style="padding-right:2%;height:100vh;">
		<div class="well" style="min-height:100vh;" >
			<h4>KONULAR</h4>
			<hr>
			<?php
			require('basliklar/kategori.php');
			kategori_listele(0,true);
			
			?>
		</div>
	</div>
	
	<div class="col-md-5">
		<div class="well" id="kutu">
			<h3>İçerik</h3>
			<hr />
			<iframe name="orta" frameborder=0></iframe>
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
			
			
			
		</div>
	</div>
	
		<div class="col-md-4 visible-lg" style="padding:0; padding-left:2%;">
		<div class="row" style="padding0;">
			<div class="col-md-12 well"  id="yan_kutu">
				<div class="panel-heading" >SON HABERLER</div>
				<div class="panel-body"><p>asfasgsadghsfdhdfshfdhdhsdfhds</p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 well"  id="yan_kutu">
				<div class="panel-heading" >Son Eklenen İçerikler</div>
				<div class="panel-body"><p>ders5<br>ders4<br>ders3<br>ders2<br>ders1</p></div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 well"  id="yan_kutu">
				<div class="panel-heading" >Anket</div>
				<div class="panel-body">
				<form>
				<p>Sizce içerikler yeterli mi?</p>
				<input type="radio" /> Evet. Yeterli.<br>
				<input type="radio" /> Hayır. Yeterli değil.<br/>
				<input type="submit" class="btn btn-default btn-md" style="float:right;" value="Gönder" />
				</form>
				</div>
			</div>
		</div>
		
		</div>
		
		
		
		
	</div>
	


<!-- Add an optional button to open the popup 
  <button class="dersEkrani_open" onclick="load(12);return false;" >Open popup</button>
-->

<!-- Add content to the popup -->
<div id="dersEkrani" style="width:80%;">
    <div id="icerik_yukle" style="height:100%;">
		
	</div>

</div>
	
	
	
	
	


</div>
</body>

<script>
function load(num){
   $("#icerik_yukle").load('ders.php?dersID='+num);
}
</script>
	
<script>
	$(document).ready(function() {
    // popup ders sayfasi
		$('#dersEkrani').popup({scrolllock:true});	
	});
	

	$( "#ilk_kapat" ).click(function() {
		$( "#ilk_giris" ).toggle( "fast", function() {
			// Animation complete.
		});
	});
</script>
	
	
</html>