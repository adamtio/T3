<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "adam";

//koneksi
$konek = mysqli_connect($server, $user, $pass, $db);

//quary
$query = "SELECT * FROM tbl_094";
$hasil = mysqli_query($konek, $query);

while ($baris=mysqli_fetch_assoc($hasil)) {
	echo "<br>".$baris['mana mahasiswa'];
}

?>