<form action=" view.php" method="POST">
<center><h1>Login</h1>
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" placeholder="ID"></td>
		</tr>
		<tr>
	 		<td>Password</td>
	 		<td><input type="Password" name="password" placeholder="password"></td>
	 	</tr>
	 	<tr>
	 		<td><input type="submit" name="Login" value="Login"></td>
	 	</tr>
	 </table>
</center>
</form>

<?php
session_start();

$login=array(
	"id"=>"Rizki",
	"password" =>"6701170031"
);
		if(isset($_POST['Login'])){
			$id = $_POST['id'];
			$password = $_POST['password'];


			if($id== $Login["id"] && $password==$Login["password"]){
				$_session['id']=$id;
				

				header("location:daftar.php");
			}else{
				header("location:view.php");
			}

		}
?>