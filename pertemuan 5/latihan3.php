<?php 
$mahasiswa = [
	["Waleed Khalid Mohammad Aldahmash", "203040032", "Teknik Informatika", "waleedaldahmash9@gmail.com"],
	["Hilman Sulaeman", "203040015", "Teknik Industri", "hilman@yahoo.com"],
	["203040016", "Tomi", "Teknik Planologi", "tomi_k@gmail.com"]
];

/* 
    Nama : Waleed Khalid Mohammad Aldahmash 
    NRP : 203040032
    Kelas A
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>