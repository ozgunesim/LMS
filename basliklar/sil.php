<?php
	

// SILME ISLEMI VARSA
if(isset($_GET['sil']))
{
	$id = $_GET['sil'];
	
	require('../db.php');
	$db = new DB();
	$db->baglan();
	$db->db_sec();

	$sql = "delete from kategori where kategori_id='" . $id . "'";
	if(mysql_query($sql))
	{
		header("Location: ../olustur.php");
	}
	else
	{
		echo "Silinemedi :( - " . $sql;
	}
}

?>