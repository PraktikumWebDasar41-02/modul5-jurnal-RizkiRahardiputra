<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
   $nama					 = $_POST['nama'];
   $nim				    	 = $_POST['nim'];
   $kelas				  	 = $_POST['kelas'];
   $jeniskelamin			 = $_POST['jeniskelamin'];
   $fakultas		   		= $_POST['fakultas'];
   $hobi			    	 = $_POST['hobi'];
   $alamat				 	= $_POST['alamat'];

 
 $sql="INSERT INTO pendaftaran(nama,nim,kelas,jeniskelamin,fakultas,hobi,alamat) VALUES ('$nama','$nim','$kelas','$jeniskelamin','$fakultas','$hobi','$alamat')";
   if(mysqli_query($con,$sql)){
    echo "Database Masuk";
    
   }else{
    echo "Database Gagal";
   }
}

?>