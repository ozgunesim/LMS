<meta charset="utf-8">
<html lang="en">
<head>
<link href="../css/bootstrap.css" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
.well
{
width: 300px;
position: absolute;
top: 50%;
margin-top: -70px;
/* margin-left: auto; */
/* margin-right: auto; */
left: 50%;
margin-left: -150px;
}
</style>
</head>
<body>
<?php
	
if(isset($_GET['ekle']))
{
	$ust_id = $_GET['ekle'];
?>

<div class="well">
	<form action="alt_ekle.php" method="get">
		<input type="text" style="display:none;" value="<?php echo $ust_id; ?>" name="ust_id"><b>Eklenecek Başlığın Adı:</b> <input type="text" class="form-control" name="ad" autofocus><input class="btn btn-default" style="margin-top:15px;float:right;" type="submit">
	</form>
</div>


<?php
}
elseif(isset($_GET['ad']) && isset($_GET['ust_id']))
{
	require('../db.php');
	$db = new DB();
	$db->baglan();
	$db->db_sec();
	
	include('../tr_karakter.php');

	$sql = "insert into kategori (kategori_adi,ust_kategori_id) values('" . $_GET['ad'] . "','" . $_GET['ust_id'] . "')";
	if(mysql_query($sql))
	{
		header("Location: ../olustur.php");
	}
	else
	{echo "eklenemedi :(";}
}
?>
	
</body>
</html>