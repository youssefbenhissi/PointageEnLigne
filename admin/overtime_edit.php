<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$date = $_POST['date'];
		$hours = $_POST['hours'] + ($_POST['mins']/60);
		$rate = $_POST['rate'];

		$sql = "UPDATE overtime SET hours = '$hours', rate = '$rate', date_overtime = '$date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Heures supplémentaires mises à jour avec succès';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Remplissez d\'abord le formulaire d\'édition';
	}

	header('location:overtime.php');

?>