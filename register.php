<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass  = '';
$db = 'd_modul5';
$conn = mysqli_connect($host, $user, $pass, $db) or die ('Connection Failed');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
	

	<center>
		<h1>APLIKASI PENDAFTARAN MAHASISWA<br></h1>

		NIM &nbsp : <input type="text" name="nim" placeholder="NIM" ><br><br>
		Nama : <input type="text" name="nama" placeholder="Nama" ><br><br>
		Email : <input type="text" name="email" placeholder="Email"><br><br>

		<input type="submit" name="submit" value="Sign In">
	</center>

	</form>
</body>
</html>

<?php 
	if (isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		$check = true;

		$_SESSION ['nim'] = $nim;

		if (strlen($nim)!=10) {
			# code...
			echo "NIM kurang dari 10 digit";
		} else {
			echo "$nim";

		}

		$_SESSION ['nama'] = $nama;

		if (strlen($nama)!=10) {
			# code...
			echo "Nama kurang dari 10 digit";
		} else {
			echo "$nama";

		}

		

		if (empty($nim) ) {
			# code...

			echo "NIM tidak boleh kosong";
			$check = false;
		} else {
			if (strlen($nim)!=10){
				echo "Nim kurang 10 digit";
			$check = false;
			}
			

		}


		if (empty($nama)){
			echo "Nama Tidak boleh kosong";
			$check = false;
		}
		else{
			if (strlen($nama)>20){
				echo "Nama kurang 20 digit";
			$check = false;
			}
			

		}


	if (empty($email)){
			echo "email Tidak boleh kosong";
			$check = false;
		}
		else{
			if (!strpos($email,'@')|| !strpos ($email, '.com')){
				echo "Format email harus .@ dan .com<br>";
			$check = false;
			}
			

		}



if($check)

		$sql = "INSERT INTO t_jurnal1 VALUES('$nim', '$nama', '$email')";
		$result  = mysqli_query($conn,$mysqli);

	}
 ?>