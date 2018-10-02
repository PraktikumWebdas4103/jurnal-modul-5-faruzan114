<?php
$host = "localhost"; //host server
$user = "root"; //user login phpmyadmin 
$pass = ""; //user login phpmyadmin
$db = "registrasi"; //nama database

if (isset($_POST['submit'])) {
			$nim = $_REQUEST['nim'];
			$nama = $_REQUEST['nama'];
			$email = $_REQUEST['email'];
			$conn = mysqli_connect($host, $user, $pass,$db);
			if ($conn==false) {
				if ($confpassword != $password) {
					die("Gagal Boss");
				}
			}
  			
if ($_POST['submit']) {
			$nim = $_REQUEST['nim'];
			$nama = $_REQUEST['nama'];
			$email = $_REQUEST['email'];

	if (empty($nim) || empty($nama) || empty($email)) {
				echo "Data Harus Diisi";
			}
	else{
					$mysqli = "INSERT INTO registrasi (nim, nama, email) 
					  VALUES ('$nim', '$nama', '$email')";
			$result = mysqli_query($conn, $mysqli);
			
			echo "Input Berhasil";
	}
		}

				
}

?>
