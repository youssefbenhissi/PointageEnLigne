<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = $_POST['description'];
		$amount = $_POST['amount'];

		$sql = "INSERT INTO deductions (description, amount) VALUES ('$description', '$amount')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'La déduction pour avance de fonds a été ajoutée avec succès';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Remplissez d\'abord le formulaire d\'ajout';
	}

	header('location: deduction.php');

?>