<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$description = $_POST['description'];
		$amount = $_POST['amount'];

		$sql = "UPDATE deductions SET description = '$description', amount = '$amount' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Déduction mise à jour avec succès';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Remplissez d\'abord le formulaire d\'édition';
	}

	header('location:deduction.php');

?>