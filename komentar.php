

<!DOCTYPE html>
<html>
<body>
	<center>
    Komentar<br>
	<form method="POST">
		<table>
			<tr><input type="text" name="komentar" placeholder="komentar" minlength="5" required></tr><br><br>
			<tr><input type="submit" name="submit" value="hitung jumlah kata"></tr><br><br>
		</table>
	</form>
</body>
</html>
	</center>
</form>

<?php
	if(isset($_POST['submit'])){
		$komentar = $_POST['komentar'];
		$hasil = str_word_count($komentar);
			echo "Jumlah kata pada komentar  adalah : $hasil";
	}

?>
