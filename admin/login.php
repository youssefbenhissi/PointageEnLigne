<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Impossible de trouver le compte avec le nom d\'utilisateur';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Mot de passe incorrect';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Saisissez d\'abord les informations d\'identification de l\'administrateur';
	}

	header('location: index.php');

?>