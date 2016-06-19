<?php
require('db.php');
$db = new DB();
$db->baglan();
$db->db_sec();
			
include('tr_karakter.php');
			
//TUM KATEGORILER ALINIYOR
$sql = "select * from kategori";
$sonuc = mysql_query($sql);
$i = 0;
if($sonuc)
{
	while($sutun = mysql_fetch_array($sonuc))
	{
		$kategoriler[$i][0] = $sutun['kategori_id'];
		$kategoriler[$i][1] = $sutun['kategori_adi'];
		$kategoriler[$i][2] = $sutun['ust_kategori_id'];
		$i++;
	}
}
else
{
	echo "sorgu hatası";
}
		
function alt_kategori_sayisi($ana_id)
{
	global 	$kategoriler;
	$alt_kat_say = 0;
	for($i = 0; $i < count($kategoriler); $i++)
	{
		if($kategoriler[$i][2] == $ana_id)
		{$alt_kat_say++;}
	}
	return $alt_kat_say;
}
	
			
function secenekler($id)
{
	// echo "<form style='display:inline;' action='olustur.php?id=" . $id . "&' method='get'><input type='text' name='eklenecek' value='Eklenecek'><input type='submit' value='ekle'></form> ";
	echo "<a style='display:inline;float:right;color:red;' href='basliklar/sil.php?sil=$id'> [Sil] </a>";
	echo "<a style='display:inline;float:right;color:blue;' href='basliklar/duzenle.php?duzenle=$id'> [Düzenle] </a>";
	echo "<a style='display:inline;float:right;color:green;' href='basliklar/alt_ekle.php?ekle=$id'> [Ekle] </a>";
	echo "<a style='display:inline;float:right;color:orange;' href='basliklar/icerik.php?konu_id=$id' target='icerik_frame'> [İçerik Ekle] </a>";
	//echo "<a style='display:inline;float:right;color:green;' href='#' onclick='alt_ekle($id); return false;'> [Ekle] </a>";
}
			
		
		
// ALT KATEGORI LISTELEYEN RECURSIVE FONKSIYON
function kategori_listele($ust_id,$link)
{
	global $kategoriler;
	global $islem;
	echo "<ul class='basliklar' style='padding-left:15px;'>";
	for($i = 0; $i < count($kategoriler); $i++)
	{
		if($kategoriler[$i][2] == $ust_id)
		{
			$item_id = $kategoriler[$i][0];
			if(!$link)
			{
				echo "<li style='display:inline;'>" . $kategoriler[$i][1] .  secenekler($item_id) . "</li>";
			}
			
			if($link)
			{
				echo "<li><a href='index.php?dersyukle=" . $kategoriler[$i][0] . "' target='orta'>" . $kategoriler[$i][1] . "</a></li>";
			}
			if(alt_kategori_sayisi($kategoriler[$i][0])>0)
			{
				kategori_listele($kategoriler[$i][0],$link);
			}
		}
	}
	echo "</ul>";
}

?>