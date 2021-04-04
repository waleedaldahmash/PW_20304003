<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

	/* 
    Nama : Waleed Khalid Mohammad Aldahmash 
    NRP : 203040012
    Kelas A
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Waleed"); ?></h1>
</body>
</html>