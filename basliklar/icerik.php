<meta charset="utf-8">
<html lang="en">
<head>
<link href="../css/bootstrap.css" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<?php
require('../db.php');
$db = new DB();
$db->baglan();
$db->db_sec();
include('../tr_karakter.php');



if(isset($_GET['konu_id']))
{
	$id =  $_GET['konu_id']; 
}

if(isset($_FILES['file']['name']) && isset($_POST['ders_id']))
{
	$isimler = array("konu.swf","ozet.pdf","test.swf");
	$say=count($_FILES['file']['name']);
	for($i=0;$i<$say;$i++){
		if($_FILES['file']['name'][$i] != null)
		{
			$isim = $_FILES['file']['name'][$i];
			$yer = $_FILES['file']['tmp_name'][$i];
			$tip = $_FILES['file']['type'][$i];
			$boyut = $_FILES['file']['size'][$i];
	 
			//max dosya büyüklüğü
			$max_boyut=50000000; //yaklaşık 50 mb
 
			if($boyut<$max_boyut)
			{
				//yüklenecek dosyanın yeri ve ismi
				$hedef = "course/" . $_POST['ders_id'] . "/" . $isimler[$i];
 
				//dosya yükleme işlemi
				if (move_uploaded_file($yer, $hedef))
				{
					echo ($i+1).". dosya başarıyla yüklendi.<br />";
				}else
				{
					echo ($i+1).'. dosya yüklenemedi.<br />';
				}
			}else
			{
				echo ($i+1).'. dosya 10 MB dan büyük.<br />';
			}
		}
	}
}

?>
<?php if(isset($_GET['konu_id']))
{
?>
<form enctype="multipart/form-data" method="post" action="icerik.php">
Konu Anlatımı: <input type="file" name="file[]" class="multi" /><hr>
Özet: <input type="file" name="file[]" class="multi" /><hr>
Test: <input type="file" name="file[]" class="multi" /><hr>
<input type="text" value="<?php echo $_GET['konu_id']; ?>" name="ders_id" style="display:none;" >
<input type="submit" name="submit" value="Yükle"  class="btn btn-primary"/>
</form>

<?php
}
else
{exit("<div class='alert alert-danger'> <b>HATA!</b> Sol taraftan bir ders seç!</div>");} ?>
</body>
</html>