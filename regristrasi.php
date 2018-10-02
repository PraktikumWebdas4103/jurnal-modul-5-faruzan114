<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>

<form action="prosreg.php" method="POST">
	<table>
		<tr>
			<td><b>Masukan Data</b></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" minlength="10" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="25"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" value="@gmail.com"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Daftar"></td>
		</tr>
	</table>
</form>

</body>
</html>
