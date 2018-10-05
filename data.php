<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA</h1><br>
	NAMA : <?php echo $_SESSION ['nim'] = $nim ?>
	Komentar <input type="textarea" name="komentar"><br>


</body>
</html>

<?php
if (isset($_POST['submit'])){
		
		$name = $_POST['nama'];
		$komentar = $_POST['kom'];

		$mysqli = "SELECT * FROM t_jurnal WHERE $name = 'nama', $kom = 'komentar'";
		$result = mysqli_query($conn, $mysqli);

		}

?>