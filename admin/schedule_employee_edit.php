<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$sched_id = $_POST['schedule'];
		
		$sql = "UPDATE employees SET schedule_id = '$sched_id' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Calendrier mis à jour avec succès';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Sélectionnez l\'horaire à modifier en premier';
	}

	header('location: schedule_employee.php');
?>