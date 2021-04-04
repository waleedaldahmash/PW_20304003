<?php 
// $mahasiswa = [
// ["Waleed Khalid Mohammad Aldahmash", "203040032", "Waleedaldahmash9@gmail.com", "Teknik Informatika"],
// ["203040016", "Hilman", "hilman_k@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "203040032",
		"nama" => "Waleed Khalid Mohammad Aldahmash",
		"email" => "waleedaldahmash9@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nama" => "Doddy Ferdiansyah", 
		"nrp" => "203040016",
		"email" => "hilman_k@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "team.png"
	]
];

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
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>