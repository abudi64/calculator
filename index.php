<!DOCTYPE html>
<html>
<head>
	<title> Kalkulator Sederhana </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  
	if (isset($_POST['hitung'])) {
		$nilai1 = $_POST['nilai1'];
		$nilai2 = $_POST['nilai2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $nilai1 + $nilai2;
				break;
			case 'kurang':
				$hasil = $nilai1 - $nilai2;
				break;
			case 'kali':
				$hasil = $nilai1 * $nilai2;
				break;
			case 'bagi':
				$hasil = $nilai1 / $nilai2;
				break;
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul"> KALKULATOR </h2>
		<a class="brand" href="https://www.pondokprogrammer.com/"> www.pondokprogrammer.com </a>
		<form method="post" action="index.php">
			<input type="text" name="nilai1" class="nilai" autocomplete="off" placeholder="Masukkan Nilai Pertama">
			<input type="text" name="nilai2" class="nilai" autocomplete="off" placeholder="masukkan Nilai Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung!" class="tombol">
		</form>
		<?php  if (isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="nilai">
		<?php }else{  ?>
			<input type="text" value="0" class="nilai">
		<?php } ?>
	</div>
</body>
</html>