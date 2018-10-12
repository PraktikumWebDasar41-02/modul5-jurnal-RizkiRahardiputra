<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
	<form action="view.php" method="POST">
		APLIKASI PENDAFTARAN<br><br>

		NAMA: <input type="text" name="nama" maxlength="35" placeholder="NAMA" required="Isikan nama anda"><br><br>

		NIM: <input type="text" name="nim" maxlength="10" placeholder="NIM" required="Isikan nim anda"><br><br>

		Kelas :<br> <input type="radio" name="kelas" value="D3MI4101">D3MI4101<br>
				<input type="radio" name="kelas" value="D3MI4102">D3MI4102<br>
				<input type="radio" name="kelas" value="D3MI4103">D3MI4103<br>
				<input type="radio" name="kelas" value="D3MI4104">D3MI4104<br><br>

		Jenis Kelamin:<br> <input type="radio" name="jeniskelamin" value="Laki-laki">Laki-Laki<br>
						<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br><br>
						

				HOBI :<br> 	<input type="checkbox" name="hobi" value="Nonton">Nonton<br>
						<input type="checkbox" name="hobi" value="Walking">Walking<br>
						<input type="checkbox" name="hobi" value="Game">Game<br>
						<input type="checkbox" name="hobi" value="Gym">Gym<br>
						<input type="checkbox" name="hobi" value="Makan">Makan<br><br>

			Fakultas: 	<select name="fakultas" id="fakultas">
						<option value="FKB">FKB</option>
  						<option value="FIT">FIT</option>
  						<option value="FIK">FIK</option>
  						<option value="FEB">FEB</option>
  						<option value="FTE">FTE</option></select><br><br>
  		
  			Alamat:		<textarea name="alamat" rows="5" cols="40" placeholder="Masukkan ALamat Sesuai KTP"required="silahkan mengsisi alamat"></textarea><br><br>

  			Submit:		<input type="submit" name="submit" value="Send">
			

	</form>
</center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
   $nama					=$_POST['nama'];
   $nim				     	=$_POST['nim'];
   $kelas				 	=$_POST['kelas'];
   $jeniskelamin	 		=$_POST['jeniskelamin'];
   $fakultas		  	 	=$_POST['fakultas'];
   $hobi			     	=$_POST['hobi'];
   $alamat				 	=$_POST['alamat'];
   $Error = array();

   if (strlen($_POST['nama'])<=35) {
    $error['nama']=="nama harus max 35";

   }if(strlen($_POST['nim'])<=10){
    $error['nim']=="nim max 10";

   }if (empty($kelas)) {
    $error['kelas']=="kelas tidak boleh kosong";

   }if (empty($jeniskelamin)) {
    $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";

   }if (empty($fakultas)) {
    $error['fakultas']=="fakultas tidak boleh kosong";

   }if (empty($hobi)) {
    $error['hobi']=="hobi tidak boleh kosong";

   }if (empty($alamat)) {
    $error['alamat']=="alamat tidak boleh kosong";
}
}


?>

